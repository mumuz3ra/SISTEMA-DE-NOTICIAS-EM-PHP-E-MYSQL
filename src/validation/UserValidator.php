<?php

namespace App;

use App\{User, Utils};

class UserValidator {
  public static function username($username) {
    $errors = [];
    if (empty($username)) {
      array_push($errors, 'Username é obrigatório!');
    }

    return $errors;
  }

  public static function email($email) {
    $errors = [];
    if (empty($email)) {
      array_push($errors, 'Email é obrigatório!');
    }
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, 'Email é obrigatório!');
    }

    return $errors;
  }

  public static function passwords($password, $passwordConf) {
    $errors = [];
    if (empty($password)) {
      array_push($errors, 'Senha é obrigatório!');
    }
    if (!empty($password) && empty($passwordConf)) {
      array_push($errors, 'Por favor confirme a senha!');
    }

    $passwordsProvided = !empty($password) && !empty($passwordConf);
    if ($passwordsProvided && $password != $passwordConf) {
      array_push($errors, 'As duas senhas não correspondem!');
    }

    return $errors;
  }

  public static function avatar($file) {
    $errors = [];

    if (isset($file) && $file['size'] > 2000000) {
      array_push($errors, 'Maximum image size is 2MB');
    }

    return $errors;
  }

  public static function create($user, $file) {
    $errors = [];

    $usernameErrors = self::username($user['username']);
    $emailErrors = self::email($user['email']);
    $passwordErrors = self::passwords($user['password'], $user['passwordConf']);
    $avatarErrors = self::avatar($file);
    $errors = array_merge($errors, $usernameErrors, $emailErrors, $passwordErrors, $avatarErrors);

    $conditions = [
      'username' => $user['username'],
      'email' => $user['email']
    ];
    $existingUser = User::selectOne($conditions, 'OR');
    if (!empty($existingUser)) {
      if (strtolower($existingUser['username']) == strtolower($user['username'])) {
        array_push($errors, 'Username já utilizado!');
      }
      if (strtolower($existingUser['email']) == strtolower($user['email'])) {
        array_push($errors, 'E-mail já utilizado!');
      }
    }

    return $errors;
  }

  public static function update($user, $avatarFile) {
    $errors = [];

    $usernameErrors = self::username($user['username']);
    $emailErrors = self::email($user['email']);
    $passwordErrors = self::passwords($user['password'], $user['passwordConf']);
    $avatarErrors = self::avatar($avatarFile);
    $errors = array_merge($errors, $usernameErrors, $emailErrors, $passwordErrors, $avatarErrors);

    $existingUser = User::selectOne(['id' => $user['id']]);
    if (empty($user['oldPassword'])) {
      array_push($errors, 'Por favor, forneça a senha antiga!');
    } else if(isset($user['oldPassword']) && !\password_verify($user['oldPassword'], $existingUser['password'])) {
      array_push($errors, 'A senha antiga não corresponde!');
    }

    $conditions = [
      'username' => $user['username'],
      'email' => $user['email']
    ];
    $existingUser2 = User::selectOne($conditions, 'OR');
    if (!empty($existingUser2)) {
      if (strtolower($existingUser2['username']) == strtolower($user['username']) && $existingUser2['id'] != $user['id']) {
        array_push($errors, 'Username já utilizado!');
      }
      if (strtolower($existingUser2['email']) == strtolower($user['email']) && $existingUser2['id'] != $user['id']) {
        array_push($errors, 'E-mail já utilizado!');
      }
    }

    return $errors;
  }

  public static function login($loginDetails) {
    $errors = [];

    if (empty($loginDetails['username'])) {
      array_push($errors, 'Username é obrigatório!');
    }

    if (empty($loginDetails['password'])) {
      array_push($errors, 'Senha é obrigatório!');
    }

    return $errors;
  }
}