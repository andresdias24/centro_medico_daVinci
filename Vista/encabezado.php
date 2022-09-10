<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Banner Content</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: "Teko", sans-serif;
		}

		.img-container {
			width: 100%;
			height: 10vh;
			position: relative;
		}

		.img-container img {
			width: 100%;
			height: 50%;
			object-fit: cover;
		}

		.content {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: grid;
			grid-template-columns: 1fr 1fr;
		}

		.content .left {
			display: grid;
			justify-items: flex-end;
			align-items: center;
		}
		.content .right{
			display: grid;
			align-items: center;
		}

		.content .left h1 {
			font-size: 8vw;
			line-height: 0.8em;
			margin: 0;
			text-align: right;
			box-sizing: border-box;
			margin-top: 0.35em;
    		margin-right: 0.5em;
			font-weight: 700;
			position: relative;
			width: min-content;
			color: #ffffff;
		}

		.content .left h1 .box {
			content: "";
			position: absolute;
			top: 0;
			background-color: #ffffff;
			height: 0.65em;
			width: 1ch;
			left: 0.2ch;
			transform: skewX(-15deg);
		}

		.content .right .text {
			font-size: 1.6vw;
			font-weight: 500;
			display: grid;
			box-sizing: border-box;
			padding: 0.5em;
			margin-top: 4.4em;
			position: relative;
			padding-left: 1.4em;
			margin-left: -1em;
			line-height: 1.3em;
		}
		.content .right .text span{
			z-index: 1;
		}
		.content .right .text::before{
			content: '';
			position: absolute;
			top: 0;
			left: 0.5em;
			width: calc(100% - 0.5em);
			background-color: #ffffff;
			height: 100%;
			z-index: 0;
			transform: perspective(20em) rotateX(12deg);
			transform-origin: right;
		}
		.content .right .text .bottom{
			font-weight: 700;
		}
		.content .left.slide2 div:nth-child(2){
			font-size: 0.8em;
		}
		.content .left.slide2 div.box{
			height: 0.55em;
			top: 0.07em;
		}
		.content .left.slide3{
			grid-column: 1 / 3;
			justify-items: flex-start;
		}
		.content .left.slide3 h1{
			width: initial;
			text-align: left;
			max-width: 85vw;
			margin: 0 auto;
			margin-top: 1.5em;
		}
		.content .left.slide3 div:nth-child(2){
			padding-left: 1.5ch;
		}
		.content .left.slide3 div:nth-child(3){
			font-weight: 400;
			font-size: 0.6em;
			letter-spacing: 1px;
			line-height: 1;
		}

	</style>
</head>

<body>
	<div class="img-container">
		<img src="https://cdn.shopify.com/s/files/1/0514/2331/4102/files/background_320c8f20-662f-4482-a817-4ff5f9074a10.png?v=1607664382"
			alt="" />
		<div class="content">
			<!-- <div class="left">
				<h1><div class="box"></div><div>ARMOUR </div><div>LIMITLESS</div></h1>
			</div> -->
			<!-- <div class="left slide2">
				<h1><div class="box"></div><div>SHOP AT</div><div>NOTHING</div></h1>
			</div> -->
			<!-- <div class="left slide3">
				<h1><div class="box"></div><div>COMING SOON</div><div>AH FULL PERFORMANCE WEAR COLLECTION</div></h1>
			</div> -->
			<!-- <div class="right">
				<div class="text">
					<span class="top">It's by far the best performance & fashion accessory for you.</span>
					<span class="bottom">PROUDLY MADE IN INDIA</span>
				</div>
			</div> -->
		</div>
	</div>
</body>

</html>