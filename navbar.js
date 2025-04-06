class SiteNavbar extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
        <style>
          .navbar {
            height: 80px;
            padding: 10px 20px;
            background-color: #cc9900 !important;
            color: white;
        
        </style>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" class="logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="motors.html">Motors</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="handpieces.html">Handpieces</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="combs.html">Combs</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="cutters.html">Cutters</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="grinders.html">Grinders</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="clothing.html">Clothing</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="accessories.html">Accessories</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      `;
    }
  }
  customElements.define('site-navbar', SiteNavbar);
  