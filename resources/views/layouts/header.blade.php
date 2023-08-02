<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  z-index: 100;
  margin-bottom:10%;
 
}

.logooo {
  width:200px;
  height:50px;
  margin-right:10%;
  margin-left:10%;
}

nav {
  display: flex;
  align-items: center;
  margin-right:10%;
}

nav a {
  font-size: 14px;
  color: #080808;
  text-decoration: none;
  font-weight: 500;
  margin-left: 20px;
  transition: .3s;
}

nav a:hover{
  color:rgb(42, 145, 114);
}

/* Dropdown Menu */
.pages-dropdown {
  position: relative;
}

.pages-dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  padding: 10px;
  z-index: 1;
}

.pages-dropdown-content a {
  display: block;
  padding: 8px;
  text-decoration: none;
  color: #080808;
  font-weight: 500;
  transition: .3s;
}

.pages-dropdown-content a:hover {
  color: #0ef;
}

/* Responsive Styles */
@media (max-width: 768px) {
  header {
    padding: 10px;
  }

  .logo {
    font-size: 20px;
  }

  nav a {
    font-size: 14px;
    margin-left: 10px;
  }

  .pages-dropdown-content {
    position: static;
    display: block;
    background-color: transparent;
    box-shadow: none;
    border-radius: 0;
    padding: 0;
    z-index: 1;
  }

  .pages-dropdown-content a {
    padding: 8px 0;
  }
}
.login-button {
  font-size: 18px; /* Increased font size */
  background-color: #0b8c8c; 
  color: rgb(255, 255, 255);
  text-decoration: none;
  font-weight: 500;
  margin-left: 20px;
  padding: 12px 20px; /* Adjusted padding to make the button larger */
  border-radius: 5px; 
}

    </style>
</head>
<body>
<header>
        <img src="IMG/img-removebg-preview.png" alt="" class="logooo">
        <nav>
          <a href="{{ route('home') }}">Acceuil</a>
          <a href="{{ route('service') }}">Services</a>
          <a href="{{ route('hebergement') }}">Hébergement</a>
          <a href="{{ route('VPSCloud') }}">VPS Cloud</a>
          <a href="{{ route('ServeurDedie') }}">Serveurs Dédiés</a>
          <a href="{{ route('domaine') }}">Domaine</a>
          <div class="pages-dropdown">
              <a href="#">Pages</a>
              <div class="pages-dropdown-content">
                  <a href="{{ route('Apropos') }}">À propos de</a>
                  <a href="{{ route('FAQ') }}">FAQ</a>
                  <a href="{{ route('Hplus') }}">H plus</a>
                  <a href="{{ route('blog') }}">Blog</a>
                  <a href="{{ route('condition') }}">Conditions</a>
              </div>
          </div>
          <a href="{{ route('contact') }}">Contact</a>
          <a href="#" class="login-button">Login</a>
      </nav>
</header>


<script>
   // JavaScript to handle the dropdown menu on hover
   const pagesDropdown = document.querySelector('.pages-dropdown');
        const pagesDropdownContent = document.querySelector('.pages-dropdown-content');

        pagesDropdown.addEventListener('mouseover', () => {
            pagesDropdownContent.style.display = 'block';
        });

        pagesDropdown.addEventListener('mouseout', () => {
            pagesDropdownContent.style.display = 'none';
        });
</script>
</body>
</html>