<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ $title }}</title>
    <style>
        /**
      Set the margins of the page to 0, so the footer and the header
      can be of the full height and width !
   **/
        @page {
            margin: 50px 0px 40px 0px;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 12px;
            line-height: 1.4;
            margin-left: 1.5cm;
            margin-right: 1.5cm;

        }

        main {
            page-break-inside: auto;
        }

        .text-center {
            text-align: center;
        }

        .mt-6 {
            margin-top: 1.5rem;
        }

        .rotate {
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }
    </style>
</head>

<body>
    <main>
        <div class="text-center {{ ($image1_size[0] < $image1_size[1]) ? 'rotate' : '' }}">
            <img style="max-width:40%;" src="{{ public_path('storage/'.$ic.'/'.$image1.'') }}" alt="image1">
        </div>
        <div class="mt-6 text-center {{ ($image2_size[0] < $image2_size[1]) ? 'rotate' : '' }}">
            <img style="max-width:40%;" src="{{ public_path('storage/'.$ic.'/'.$image2.'') }}" alt="image2">
        </div>
    </main>
</body>

</html>