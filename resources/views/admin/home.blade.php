<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title></title>
	<style>
        /* Main CSS Here */

@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
}
:root {
--background-color1: #fafaff;
--background-color2: #ffffff;
--background-color3: #ededed;
--background-color4: #cad7fda4;
--primary-color: #4b49ac;
--secondary-color: #0c007d;
--Border-color: #3f0097;
--one-use-color: #3f0097;
--two-use-color: #5500cb;
}
body {
background-color: var(--background-color4);
max-width: 100%;
overflow-x: hidden;
}

header {
height: 70px;
width: 100vw;
padding: 0 30px;
background-color: var(--background-color1);
position: fixed;
z-index: 100;
box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
display: flex;
justify-content: space-between;
align-items: center;
}

 .logo {
            display: flex;
            align-items: center;
        }

         .logo img {
            width: 2rem;
            height: 2rem;
            margin-right: 8px;
        }

.icn {
height: 30px;
}
.menuicn {
cursor: pointer;
}

.logosec {
display: flex;
align-items: center;
justify-content: center;
}



.logosec {
gap: 60px;
}



.main-container {
display: flex;
width: 100vw;
position: relative;
top: 70px;
z-index: 1;
}


.main {
height: calc(100vh - 70px);
width: 100%;
overflow-y: scroll;
overflow-x: hidden;
padding: 40px 30px 30px 30px;
}

.main::-webkit-scrollbar-thumb {
background-image:
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
}
.main::-webkit-scrollbar {
width: 5px;
}
.main::-webkit-scrollbar-track {
background-color: #9e9e9eb2;
}

.box-container {
display: flex;
justify-content: space-evenly;
align-items: center;
flex-wrap: wrap;
gap: 50px;
}
.nav {
min-height: 91vh;
width: 250px;
background-color: var(--background-color2);
position: absolute;
top: 0px;
left: 00;
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
display: flex;
flex-direction: column;
justify-content: space-between;
overflow: hidden;
padding: 30px 0 20px 10px;
}
.navcontainer {
height: calc(100vh - 70px);
width: 250px;
position: relative;
overflow-y: scroll;
overflow-x: hidden;
transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
display: none;
}
.navclose {
width: 80px;
}
.nav-option {
width: 250px;
height: 60px;
display: flex;
align-items: center;
padding: 0 30px 0 20px;
gap: 20px;
transition: all 0.1s ease-in-out;
}
.nav-option:hover {
border-left: 5px solid #a2a2a2;
background-color: #dadada;
cursor: pointer;
}
.nav-img {
height: 20px;
}

.nav-upper-options {
display: flex;
flex-direction: column;
align-items: center;
gap: 30px;
}

.option1 {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
color: white;
cursor: pointer;
}
.option1:hover {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
}
.box {
height: 130px;
width: 230px;
border-radius: 20px;
box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
padding: 20px;
display: flex;
align-items: center;
justify-content: space-around;
cursor: pointer;
transition: transform 0.3s ease-in-out;
}
.box:hover {
transform: scale(1.08);
}

.box:nth-child(1) {
background-color: var(--one-use-color);
}
.box:nth-child(2) {
background-color: var(--two-use-color);
}
.box:nth-child(3) {
background-color: var(--one-use-color);
}
.box:nth-child(4) {
background-color: var(--two-use-color);
}

.box img {
height: 50px;
}
.box .text {
color: white;
}
.topic {
font-size: 13px;
font-weight: 400;
letter-spacing: 1px;
}

.topic-heading {
font-size: 30px;
letter-spacing: 3px;
}

.report-container {
min-height: 300px;
max-width: 1200px;
margin: 70px auto 0px auto;
background-color: #ffffff;
border-radius: 30px;
box-shadow: 3px 3px 10px rgb(188, 188, 188);
padding: 0px 20px 20px 20px;
}
.report-header {
height: 80px;
width: 100%;
display: flex;
align-items: center;
justify-content: space-between;
padding: 20px 20px 10px 20px;
border-bottom: 2px solid rgba(0, 20, 151, 0.59);
}

.recent-Articles {
font-size: 30px;
font-weight: 600;
color: #5500cb;
}

.view {
height: 35px;
width: 90px;
border-radius: 8px;
background-color: #5500cb;
color: white;
font-size: 15px;
border: none;
cursor: pointer;
}

.report-body {
max-width: 1160px;
overflow-x: auto;
padding: 20px;
}
.report-topic-heading,
.item1 {
width: 1120px;
display: flex;
justify-content: space-between;
align-items: center;
}
.t-op {
font-size: 18px;
letter-spacing: 0px;
}

.items {
width: 1120px;
margin-top: 15px;
}

.item1 {
margin-top: 20px;
}
.t-op-nextlvl {
font-size: 14px;
letter-spacing: 0px;
font-weight: 600;
}

.label-tag {
width: 100px;
text-align: center;
background-color: rgb(0, 177, 0);
color: white;
border-radius: 4px;
}


.sub-menu {
    display: none;
    margin-top: 10px;
}

.arrow-icon {
    margin-left: 30px;
}

.nav-option:hover .arrow-icon {
    cursor: pointer;
}

    </style>
	<link rel="stylesheet"
		href="responsive.css">
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">
                <img src="{{ asset('IMG/favicon.png') }}" alt="">
                <h2>Admin</h2>
            </div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
		</div>

		

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<p> Dashboard</p>
					</div>

                    <div class="nav-option option2" onclick="toggleSubMenu('sub-menu1')">
    <img src="" class="nav-img" alt="">
    <p>Menu</p>
    <span class="arrow-icon">></span>
</div>
<div class="sub-menu" id="sub-menu1" style="display: none;">
    <div class="sub-menu-option">Haut</div>
    <div class="sub-menu-option">Bas</div>
</div>

<div class="nav-option option3" onclick="toggleSubMenu('sub-menu2')">
    <img src="" class="nav-img" alt="">
    <p>Service</p>
    <span class="arrow-icon">></span>
</div>
<div class="sub-menu" id="sub-menu2" style="display: none;">
    <div class="sub-menu-option"><a href="{{route('ajouter-service')}}">Ajouter</a></div>
    <div class="sub-menu-option"><a href="{{route('update')}}">Modifier</a></div>
    <div class="sub-menu-option"><a href="{{route('delete')}}">Supprimer</a></div>
</div>

<div class="nav-option option4" onclick="toggleSubMenu('sub-menu3')">
    <img src="" class="nav-img" alt="">
    <p>Blog</p>
    <span class="arrow-icon">></span>
</div>
<div class="sub-menu" id="sub-menu3" style="display: none;">
    <div class="sub-menu-option"><a href="{{route('ajouter')}}">Ajouter</a></div>
    <div class="sub-menu-option"><a href="{{route('updateB')}}">Modifier</a></div>
    <div class="sub-menu-option"><a href="{{route('Blog-delete')}}">Supprimer</a></div>
</div>



					<div class="nav-option option5">
						<img src=
""
							class="nav-img"
							alt="">
							<a href="{{route('message')}}"><p> Message</p></a>
							
						
					</div>

					<div class="nav-option option6">
						<img src=
""
							class="nav-img"
							alt="">
							<a href="{{route('domaine')}}"><p> Domaine</p></a>
						
					</div>

					<div class="nav-option logout">
						<img src=
""
							class="nav-img"
							alt="">
						<p>Logout</p>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			

		

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Recent Messages</h1>
					<button class="view">View All</button>
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<p class="t-op">Full name</p>
						<p class="t-op">massage</p>
						<p class="t-op">gmail</p>
						<p class="t-op">Status</p>
					</div>

					<div class="items">
						<div class="item1">
							<p class="t-op-nextlvl">name</p>
							<p class="t-op-nextlvl">msg</p>
							<p class="t-op-nextlvl">gmail</p>
							<p class="t-op-nextlvl label-tag">envoyer</p>
						</div>

						

					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
        let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click", () => {
	nav.classList.toggle("navclose");
})

    </script>




<script>
function toggleSubMenu(subMenuId) {
    var subMenu = document.getElementById(subMenuId);
    var arrowIcon = subMenu.previousElementSibling.querySelector(".arrow-icon");
    if (subMenu.style.display === "none") {
        subMenu.style.display = "block";
        arrowIcon.innerText = "<";
    } else {
        subMenu.style.display = "none";
        arrowIcon.innerText = ">";
    }
}


</script>
</body>
</html>
