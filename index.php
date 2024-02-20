<!DOCTYPE html>
<html lang="pl-PL">

<head>
	<title>Plany wycieczek</title>
	<meta name="og:image" content="https://cdn.discordapp.com/attachments/961293203577905244/1206521843352207390/1707727612236.jpg?ex=65dc5007&is=65c9db07&hm=b6ff8bcd30245c4aa29fe6e32cd4f3fdef44fe20d2115e2c58bbadf3d2d75f81&" />
	<meta name="description" content="🌄 Wycieczki 🌄">
	<link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/961293203577905244/1206522577158410250/Screenshot_2024-02-12-09-49-50-190_com.discord.png?ex=65dc50b6&is=65c9dbb6&hm=4e5da77a268a305f2105f12653e73016e02dd5595a8e5d1bc558f63d48f55970&">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Kacper.M Wycieczki">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/style.css" rel="stylesheet" type="text/css" />
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>


<body>

<div id="preloader">
	<div class="center-body">
		<div class="loader-circle-11">
			<div class="arc" style="border-bottom: 5px solid #0091EA;"></div>
			<div class="arc" style="border-bottom: 5px solid #00B0FF;"></div>
			<div class="arc" style="border-bottom: 5px solid #40C4FF;"></div>
		</div>
	</div>
</div>

<div id="top"></div>

	<nav id="navbar" class="navbar">
		<div class="navbar-content">
			<div class="navbar-logo">
				<a href="#top">
					<img src="https://cdn.discordapp.com/attachments/961293203577905244/1206522450217799701/channels4_profile.jpg?ex=65dc5098&is=65c9db98&hm=25bde82beb1e3446f8b21dfe3acca26c96a9d3658de824df3cd1dd68ff35b79d&" alt="logo">
				</a>
			</div>
			<div class="navbar-menu">
				<a class="menu-button basic" href="#wycieczki"><i class="fa fa-map-signs" aria-hidden="true"></i></a>
				<a class="menu-button Facebook" href="https://www.facebook.com/KacperMWycieczki" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a class="menu-button YouTube" href="https://youtube.com/@Kacper.M-Wycieczki" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				<a class="menu-button basic" href="#szukaj"><i class="fa fa-search" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="progress-container">
			<div class="progress-bar" id="myBar"></div>
		</div>
	</nav>

	<div class="body-content">

		<div class="main-page-title">
			<img src="https://cdn.discordapp.com/attachments/961293203577905244/1206521843352207390/1707727612236.jpg?ex=65dc5007&is=65c9db07&hm=b6ff8bcd30245c4aa29fe6e32cd4f3fdef44fe20d2115e2c58bbadf3d2d75f81&" alt="Hala Gąsienicowa" style="width:100%;">
			<div class="title-text">Gdzies, gdzie nas jeszcze nie bylo…</div>
			<div class="title-text-description"><i style="font-size: 11px;" class="fa fa-map-marker" aria-hidden="true"></i> ⁣ Hala Gąsienicowa</div>
		</div>

		<div class="wycieczki-container">
			<div class="menu-controls">
				<div class="wycieczki-search">
					<div id="szukaj" style="position:relative;left:0;top:-85px;width:0px;height:0px;overflow:hidden;"></div>
					<input id="search" type="text" placeholder="Szukaj wycieczki…">
				</div>
				<div class="wycieczki-sort-buttons">
					<button id="sortStyleButton_List" class="sort-button" onclick="sortList()"><i class="fa fa-list" aria-hidden="true"></i></button>
					<button id="sortStyleButton_Grid" class="sort-button active" onclick="sortGrid()"><i class="fa fa-th-large" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="wycieczki-list">
				<div id="wycieczki" style="position:relative;left:0;top:-85px;width:0px;height:0px;overflow:hidden;"></div>
<!--         POSTY:      -->
				<div class="post post-grid">
					<img class="pImage pImage-grid" src="https://cdn.discordapp.com/attachments/961293203577905244/1209540253526917140/jarabinskie-tiesnavy.jpg?ex=65e74b24&is=65d4d624&hm=21715905ee90f502af8d2e3aa95b27a491b0dea8cd245041c6b1c226fca016fe&" alt="Jarabińskie tiesniavy">
					<div class="pContent">
						<p class="pTitle pTitle-grid">JARABIŃSKIE TIESNIAVY</p>
						<p class="pDate pDate-grid"><i class="fa fa-calendar" aria-hidden="true"></i> 20.02.2023</p>
						<a class="pReadMore pReadMore-grid" href="wycieczki/2024/jarabinskie-tiesniavy.php">Czytaj więcej <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				
<!--      KONIEC POSTÓW     -->
			</div>
		</div>


	</div>

	<footer class="web-footer">
		<div class="socials">
			<p class=socials-title>Znajdź mnie na:</p>
			<div class="socials-links">
				<a class="footer-button YouTube" href="https://youtube.com/@Kacper.M-Wycieczki" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> YouTube</a>
				<a class="footer-button Facebook" href="https://www.facebook.com/KacperMWycieczki" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
			</div>
		</div>
		<div class="contact">
			<p class=contact-title>Kontakt ze mną:</p>
			<a href="mailto:kacper.m.wycieczki@vp.pl" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> kacper.m.wycieczki@vp.pl</a>
		</div>
		<p class="copyright-info">Copyright © <?php echo date("Y") ?> Kacper.M Wycieczki</p></p>
	</footer>


<script>
$('html').addClass('js');

$(window).on("load", function() {
	 $("#preloader").fadeOut(1000);
});
</script>
<script>
window.onscroll = function() {myFunction()};

function myFunction() {
	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var scrolled = (winScroll / height) * 100;
	document.getElementById("myBar").style.width = scrolled + "%";
}
</script>

<script>
var buttonList = document.getElementById("sortStyleButton_List");
var buttonGrid = document.getElementById("sortStyleButton_Grid");
var posts = document.querySelectorAll(".post");
var pContents = document.querySelectorAll(".pContent");
var pImages = document.querySelectorAll(".pImage");
var pTitles = document.querySelectorAll(".pTitle");
var pDates = document.querySelectorAll(".pDate");
var pReadMoreButtons = document.querySelectorAll(".pReadMore");

function sortList() {
	buttonGrid.classList.remove("active");
	buttonList.classList.add("active");
	posts.forEach(post => {
		post.classList.remove("post-grid");
		post.classList.add("post-list");
	});
	pContents.forEach(pContent => {
		pContent.classList.add("pContent-list");
	});
	pImages.forEach(pImage => {
		pImage.classList.remove("pImage-grid");
		pImage.classList.add("pImage-list");
	});
	pTitles.forEach(pTitle => {
		pTitle.classList.remove("pTitle-grid");
		pTitle.classList.add("pTitle-list");
	});
	pDates.forEach(pDate => {
		pDate.classList.remove("pDate-grid");
		pDate.classList.add("pDate-list");
	});
	pReadMoreButtons.forEach(pReadMore => {
		pReadMore.classList.remove("pReadMore-grid");
		pReadMore.classList.add("pReadMore-list");
	});
}

function sortGrid() {
	buttonList.classList.remove("active");
	buttonGrid.classList.add("active");
	posts.forEach(post => {
		post.classList.remove("post-list");
		post.classList.add("post-grid");
	});
	pContents.forEach(pContent => {
		pContent.classList.remove("pContent-list");
	});
	pImages.forEach(pImage => {
		pImage.classList.add("pImage-grid");
		pImage.classList.remove("pImage-list");
	});
	pTitles.forEach(pTitle => {
		pTitle.classList.add("pTitle-grid");
		pTitle.classList.remove("pTitle-list");
	});
	pDates.forEach(pDate => {
		pDate.classList.add("pDate-grid");
		pDate.classList.remove("pDate-list");
	});
	pReadMoreButtons.forEach(pReadMore => {
		pReadMore.classList.add("pReadMore-grid");
		pReadMore.classList.remove("pReadMore-list");
	});
}
</script>

</body>

</html>
