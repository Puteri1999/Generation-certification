
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style type="text/css">
        /* To remove margin while generating PDF. */
        * {
            margin:0;
            padding:0
        }
    	body {
    		margin: 0;
    		height: 8.27in;
    		width: 11.69in;
    		background-image: url({{ asset('https://thumbs.dreamstime.com/z/certificate-diploma-background-template-floral-completion-design-scroll-swirl-pattern-watermark-border-frame-red-wax-seal-34468984.jpg') }});
    		background-size: 11.69in 8.27in; /* Not sure whether it works with DOMPDF. So, using a background of actual size. */
    		background-position: center;
            background-repeat: no-repeat;
    	}
    	.name {
    		font-family: sans-serif;
    		font-size: .30in;
            line-height: .44in;
            font-weight: 700;
    		text-transform: uppercase;
            text-align: center;
    		color: #000000;
    		width: 10in;
    		margin-top: 3in;
    		margin-left: 1in;
    	}
    </style>
</head>
<body>
	<div class="name">{{ 'PUTERI WARDIAH QASRINA' }}</div>
</body>
</html>