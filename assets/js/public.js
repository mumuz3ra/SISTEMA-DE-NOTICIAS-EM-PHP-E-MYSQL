const baseUrl = 'http://localhost/nerkodex';
const mobileBreakpoint = 756;
const menuIcon = document.querySelector('.menu-icon');
const navOverlay = document.querySelector('header .nav-overlay');
const navMenu = document.querySelector('.navmenu');
const navItems = document.querySelectorAll('.navitem');


// Switch between search icon and search form/input
const searchIcon = document.querySelector('.search-icon');
const headerSearchForm = document.querySelector('.header-search-form');
const headerSearchInput = document.querySelector('.search-input');
const logoWrapper = document.querySelector('.logo-wrapper');

function toggleSearchBar() {
  searchIcon.classList.toggle('hide');
  headerSearchForm.classList.toggle('hide');
  headerSearchInput.focus();
  if (window.innerWidth <= mobileBreakpoint) {
    logoWrapper.classList.toggle('hide');
  }
}

const loadMoreButton = document.querySelector('.load-more-btn');

function displayPosts(posts) {
  let postsHtml = '';
  posts.forEach(post => {
    postsHtml = `${postsHtml}
              <div class="col-12 col-sm-12 col-lg-4">
                <div class="md-mb80">
                  <div class="item pb-50 mb-50 bord-thin-bottom">
                    <div class="img">
                        <a href="${baseUrl}/posts/${post.slug}">
                          <img src="${baseUrl}/${post.post_image}" alt="">
                        </a>
                    </div>
                    <div class="cont mt-30">
                      
                      <span class="date mb-10">
                        <a href="${baseUrl}/topics/${post.topics}">${post.topic_name}</a>
                      </span>

                      <span class="date mb-10">${post.read_time}</span>

                      <h4 class="mb-15">
                        <a href="${baseUrl}/posts/${post.slug}">${post.title}</a>
                      </h4>
                      <p>${post.body_preview}</p>
                    </div>
                  </div>                           
                </div>
              </div>
    `;
  });
  postsHtml = `${postsHtml}`;
  const morePostsNode = new DOMParser().parseFromString(postsHtml, "text/html");
  const postsNodeList = morePostsNode.firstChild.childNodes[1].childNodes;

  postsNodeList.forEach(postNode => {
    loadMoreButton.parentNode.insertBefore(postNode, loadMoreButton);
  });
}

async function fetchMorePosts(url) {
  loadMoreButton.innerHTML = 'Loading...';
  const response = await fetch(url);
  const posts = await response.json();
  displayPosts(posts);
  if (posts.length < 3) {
    const endElement = `<div style="text-align: center; color: gray;">Você chegou ao fim.</div>`;
    const endNode = new DOMParser().parseFromString(endElement, "text/html")
    loadMoreButton.parentNode.replaceChild(endNode.firstChild.childNodes[1].childNodes[0], loadMoreButton);
  } else {
    loadMoreButton.innerHTML = 'Carregar Mais!';
  }
}