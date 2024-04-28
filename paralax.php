<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .fata {
            width: 100%;
            min-width: 500px;
            max-height: 1400px;
            min-height: 900px;
            background: url(/dashboard/viorel/3_paralax.png) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .fata_1{
			width: 100%;
            min-width: 500px;
            max-height: 1400px;
            min-height: 900px;
            background-size: cover;
            background-position: center;
			background: url(/dashboard/viorel/2_paralax.png) no-repeat;
		}
        .fata_2 {
            width: 100%;
            min-width: 500px;
            max-height: 1400px;
            min-height: 900px;
            background-size: cover;
            background-position: center;
			background: url(/dashboard/viorel/1_paralax.png) no-repeat;
        }
		.bottom {
			height: 500px;
		}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                $('.fata_1').css('background-position', 'center ' + (+0.4 * scroll) + 'px');
                $('.fata_2').css('background-position', 'center ' + (+0.2 * scroll) + 'px');
            });
        });
    </script>
</head>

<body>
    <div class="fata">
        <div class="fata_1">
		<div class="fata_2">
		
		еуче еуче еуче
        </div>
        </div>
    </div>
	<div class="bottom">
	</div>
</body>

</html>
