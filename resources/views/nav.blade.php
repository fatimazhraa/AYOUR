<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
 
 * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   scroll-behavior: smooth;
   font-family: 'Poppins', sans-serif;
 }


 /* header */
header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 100;
}

.logo {
  font-size: 25px;
  color: #080808;
  text-decoration: none;
  font-weight: 600;
}

nav a {
  font-size: 15px;
  color: #080808;
  text-decoration: none;
  font-weight: 500;
  margin-left: 20px;
  transition: .3s;
}
nav a:hover,
nav a.active {
  color: #0ef;
}
@media (max-width: 768px) {
  header {
    padding: 20px 10px;
  }
  
  nav a {
    font-size: 14px;
    margin-left: 10px;
  }
}
/* header */

    </style>
</head>
<body>
<header>
        <a href="#" class="logo">Host Oplus</a>
        <nav>
            <a href="#" class="active">Home</a>
            <a href="#">About Us</a>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Blogs</a>
            <a href="#">Contact Us</a>
            <a href="#">Marketplace</a>
            <a href="#">Login</a>
        </nav>
</header>
</body>
</html>