<?php

use Klein\Request;

require_once __DIR__ . '/vendor/autoload.php';

use App\{AuthController, Utils, Post};

AuthController::rememberMe();

$klein = new \Klein\Klein();


function r($method, $path, $handler) {
  global $klein;
  $klein->respond($method, $path, $handler);
}

$klein->with('/nerkodex', function () use ($klein) {

  /*****************
   **** PUBLIC PAGES ROUTES
  ******************/
  r('GET', '/', ['App\PublicPagesController', 'index']);
  r('GET', '/about', ['App\PublicPagesController', 'about']);
  r('GET', '/team', ['App\PublicPagesController', 'team']);


  r('GET', '/topics/[:topic_slug]', ['App\PublicPagesController', 'showTopicPosts']);
  r('GET', '/posts', ['App\PublicPagesController', 'showAllPosts']);
  r('GET', '/posts/[:slug]', ['App\PublicPagesController', 'showSinglePost']);
  r('GET', '/collection/[:slug]', ['App\PublicPagesController', 'showCollectionPosts']);
  r('GET', '/users/[:user_slug]', ['App\PublicPagesController', 'showUserPosts']);


  /*****************
  **** POSTS ROUTES
  ******************/

  r('GET', '/admin/posts', ['App\PostController', 'managePosts']);
  r('GET', '/admin/posts/create', ['App\PostController', 'create']);
  r('GET', '/admin/posts/[:id]/edit', ['App\PostController', 'edit']);
  r('POST', '/admin/posts/update/[:id]', ['App\PostController', 'update']);
  r('POST', '/admin/posts/create', ['App\PostController', 'save']);
  r('POST', '/admin/auto-save-posts', ['App\PostController', 'asyncSave']);
  r('POST', '/admin/posts/upload-post-image', ['App\PostController', 'uploadPostBodyImage']);
  r('GET', '/admin/posts/toggle-publish/[:id]', ['App\PostController', 'togglePublish']);
  r('POST', '/admin/posts/search', ['App\PostController', 'asyncAdminSearch']);
  r('GET', '/admin/posts/filter-posts', ['App\PostController', 'asyncFilter']);
  r('POST', '/admin/posts/update-featured-post', ['App\PostController', 'updateFeaturedPost']);
  r('GET', '/admin/posts/[:post_id]/related', ['App\PostController', 'relatedPosts']);
  r('POST', '/admin/posts/related-posts/[:post_id]', ['App\PostController', 'saveRelatedPosts']);

  // Post Trash, Delete, Restore routes
  r('GET', '/admin/posts/trash/[:id]', ['App\PostController', 'trash']);
  r('GET', '/admin/posts/trash', ['App\PostController', 'showTrash']);
  r('GET', '/admin/posts/confirm-delete/[:id]', ['App\PostController', 'confirmDelete']);
  r('GET', '/admin/posts/permanently-delete/[:id]', ['App\PostController', 'permanentlyDelete']);
  r('GET', '/admin/posts/restore/[:id]', ['App\PostController', 'restore']);

  /***************************
  **** COLLECTIONs ROUTES
  ****************************/
  r('GET', '/admin/collections', ['App\PostCollectionController', 'index']);
  r('GET', '/admin/collections/create', ['App\PostCollectionController', 'create']);
  r('GET', '/admin/collections/[:id]/edit', ['App\PostCollectionController', 'edit']);
  r('POST', '/admin/collections', ['App\PostCollectionController', 'save']);
  r('POST', '/admin/collections/update/[:id]', ['App\PostCollectionController', 'update']);
  r('POST', '/admin/collections/save-positions', ['App\PostCollectionController', 'asyncSavePositions']);

  r('POST', '/admin/collections/save-posts', ['App\PostCollectionController', 'savePosts']);
  r('GET', '/admin/collections/confirm-delete/[:slug]', ['App\PostCollectionController', 'confirmDelete']);
  r('GET', '/admin/delete-collection/[:id]', ['App\PostCollectionController', 'deleteCollection']);
  r('GET', '/admin/collections/posts/[:collection_id]', ['App\PostCollectionController', 'assignPosts']);

  /*****************
  **** TOPIC ROUTES
  ******************/
  r('GET', '/admin/topics', ['App\TopicController', 'manageTopics']);
  r('GET', '/admin/topics/create', ['App\TopicController', 'create']);
  r('POST', '/admin/topics', ['App\TopicController', 'save']);
  r('GET', '/admin/topics/[:id]/edit', ['App\TopicController', 'edit']);
  r('POST', '/admin/topics/update/[:id]', ['App\TopicController', 'update']);
  r('GET', '/admin/topics/delete/[:id]', ['App\TopicController', 'delete']);

  /*****************
  **** ROLES ROUTES
  ******************/
  r('GET', '/admin/roles', ['App\RoleController', 'manageRoles']);
  r('GET', '/admin/roles/create', ['App\RoleController', 'create']);
  r('POST', '/admin/roles', ['App\RoleController', 'save']);
  r('GET', '/admin/roles/[:id]/edit', ['App\RoleController', 'edit']);
  r('POST', '/admin/roles/update/[:id]', ['App\RoleController', 'update']);
  r('GET', '/admin/roles/delete/[:id]', ['App\RoleController', 'delete']);
  r('GET', '/admin/roles/assign-permissions/[:role_id]', ['App\RoleController', 'showAssignPermissions']);
  r('POST', '/admin/assign-permissions/[:role_id]', ['App\RoleController', 'assignPermission']);

  /*****************
  **** PERMISSIONS ROUTES
  ******************/
  r('GET', '/admin/permissions', ['App\PermissionController', 'managePermissions']);
  r('GET', '/admin/permissions/create', ['App\PermissionController', 'create']);
  r('POST', '/admin/permissions', ['App\PermissionController', 'save']);
  r('GET', '/admin/permissions/[:id]/edit', ['App\PermissionController', 'edit']);
  r('POST', '/admin/permissions/update/[:id]', ['App\PermissionController', 'update']);
  r('GET', '/admin/permissions/delete/[:id]', ['App\PermissionController', 'delete']);


  /*****************
  **** USER ROUTES
  ******************/
  r('GET', '/admin/users', ['App\UserController', 'manageUsers']);
  r('POST', '/admin/users', ['App\UserController', 'save']);
  r('GET', '/admin/users/create', ['App\UserController', 'create']);
  r('GET', '/admin/users/[:id]/edit', ['App\UserController', 'edit']);
  r('GET', '/admin/users/delete/[:id]', ['App\UserController', 'delete']);
  r('POST', '/admin/users/update/[:id]', ['App\UserController', 'update']);
  r('POST', '/admin/users/search', ['App\UserController', 'asyncAdminSearch']);
  r('GET', '/admin/users/filter-users', ['App\UserController', 'asyncFilter']);


  // Authentication routes
  r('GET', '/login', ['App\AuthController', 'showLogin']);
  r('POST', '/login', ['App\AuthController', 'login']);
  r('GET', '/logout', ['App\AuthController', 'logout']);
  r('GET', '/register', ['App\AuthController', 'showRegister']);
  r('POST', '/register', ['App\AuthController', 'register']);

  // Reset Password
  r('GET', '/forgot-password', ['App\AuthController', 'forgotPassword']);
  r('POST', '/send-reset-link', ['App\AuthController', 'sendResetLink']);
  r('GET', '/reset-email-sent', ['App\AuthController', 'showResetEmailSent']);
  r('GET', '/reset-password/[:token]', ['App\AuthController', 'showResetPasswordForm']);
  r('POST', '/reset-password', ['App\AuthController', 'saveNewPassword']);
  r('GET', '/email-template/reset-link', ['App\EmailController', 'showResetEmailTemplate']);

  // Dashboard routes
  r('GET', '/dashboard', ['App\DashboardController', 'show']);

});






/*
  PAGE NOT FOUND ROUTES
*/ 
$klein->onHttpError(function ($code, $router) {
  switch ($code) {
    case 404:
      $router->response()->body(
        '
    
          <body style="
      
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: center;
            background-color: #0c0c0c;
            margin: 0;
            width: 100vw;
            height: 100vh;
	          font-family: "RUBIK", sans-serif;
        
          ">
            <div style="display: flex;
              
              flex-flow: row wrap;
              justify-content: center;
              align-items: center;
              max-width: 700px;
              padding: 40px 20px 20px;
              border-radius: 2px;
            ">

              <h1 style=" 
    
                color: #fff;
                font-family: sans-serif;
                font-size: 40px;
                width: 100%;
                text-align: center;
                font-weight: 900;
    
              ">
                ERROR 404
              <h1/>

              <p style="
              
                line-height: 1.75;
                font-size: 18px;
                font-weight: 300;
                font-family: monospace;
                color: #ddd;
                margin: 0;
                text-align: justify;

              ">
                A página que você está procurando não existe. Ela pode ter sido removida completamente. Tente procurar por alguma outra página ou retorne ao início do site para encontrar o que você está procurando.
              <p/>

              <div style="
            
                width: 100%;
                height: 64px;
                margin: 20px 0px 20px 0px;
                cursor: pointer;
                box-shadow: 0 0 20px 0 #25a5691c;
                color: #fff;
                font-size: 17px;
                font-family: sans-serif;
                font-weight: 900;
                text-transform: uppercase;
                text-align: center;
                border: solid 1px #fff;
                border-radius: 2px;
                transition: 0.5s ease;
                display: inline-block;
              ">
              
                <a href="/nerkodex" style="    
                
                text-decoration: none; 
                color: #fff;">

                <p>
                  Voltar ao início!
                <p/>

                <a/>
              <div/>
            <div/>
          <body/>
        '
    );
    break;
    case 405:
      $router->response()->body(
          'You can\'t do that!'
      );
      break;
    default:
      $router->response()->body(
          'Oh no, a bad error happened that caused a '. $code
      );
  }
});

$klein->dispatch();
