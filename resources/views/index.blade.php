<!DOCTYPE html>
<html>
<head>
	<title>TEST EXAM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	</head>
<body>
	<header class="container-fluid" ng-controller="ctrlHead">
		<div class="row">
			<div class="headerLogo col-md-4 col-sm-12 col-xs-12" style="width: 100%; transition: .5s;">
				<a href="Sweet Home!"><img src="http://pluspng.com/img-png/home-icon-png-home-icon-image-211-1200.png" style="width: 5%; transition: .5s;">
				</a>
			</div>
		</div>
	</header>

	<nav class="container-fluid">
		<ul class="row">
			<li class="navItem col-md-2 col-sm-4 col-xs-12">
				<a href="">Home</a>
			</li>
			<li class="navItem col-md-2 col-sm-4 col-xs-12">
				<a href="">Best Home</a>
			</li>
			<li class="navItem col-md-2 col-sm-4 col-xs-12">
				<a href="">Life Style</a>
			</li>
			<li class="navItem col-md-2 col-sm-4 col-xs-12">
				<a href="">About Us</a>
			</li>
			<li class="navItem col-md-2 col-sm-4 col-xs-12">
				<a href="">Contact Us</a>
			</li>
				<div>
					<div class="input-group">
						<input type="text" class="valueSearch form-control" placeholder="Search">
						<span class="input-group-btn">
				        	<a href="">Search</a>
				    	</span>
					</div>
				</div>
		</ul>
	</nav>
    @foreach($items as $item)
	<div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">{{ $item->tenchungcu}}</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div>
    @endforeach
    <div class="col-md-12">
        {{$items->links()}}
    </div>
    
    <!-- <div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">Home 2</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div>

    <div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">Home 3</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div>

    <div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">Home 4</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div>

    <div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">Home 5</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div>

    <div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">Home 6</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div>

    <div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">Home 7</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div>

    <div class="col-xs-12 col-md-3 col-ms-6 col-sm-4 ng-scope" ng-repeat="video in videosArray">
        <a class="hover-flash thumbnail shadow-box">
            <img src="https://thoitrangwiki.com/wp-content/uploads/2017/03/nha-2-tang-co-san-vuon.jpg">
        </a>
        <a href="" class="caption" style="text-decoration: none; color: black;" ng-click="playVideo(video.attributes.youtubeId, video.attributes.name, video.attributes.description, video.attributes.thumbnail);" data-toggle="modal" data-target="#myModal">
            <strong ng-bind="video.attributes.name" class="ng-binding">Home 8</strong>
            <p>Thiết kế đẹp, tận dụng được không gian, tiết kiệm chi phí,... là những gì chúng ta có thể nghĩ đến ở một ngôi nhà có gác lửng. Tuy nhiên, những mẫu hình ảnh nhà có gác lửng dưới đây sẽ khiến bạn cảm nhận được nhiều điều tuyệt vời hơn cả những gì mà bạn đang tưởng tượng về những công trình đầy ấn tượng này! Chắc chắn bạn sẽ yêu thích nó!</p>
        </a>
    </div> -->
    <center>
    	<footer><br>Aptech FPT @Copyright 2018</br>
    	</footer>
    </center>
	
</body>
</html>