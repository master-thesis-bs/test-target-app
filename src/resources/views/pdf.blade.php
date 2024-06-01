<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="styles.css">
    <title>Title</title>

    <style>
        * {
            font-family: Graphik;
            background: #1f1f1f;;
        }

        .body {
            display: flex;
            margin: 0;
            flex-direction: column;
        }

        .body > div {
            /*border-top: dashed 2px yellow;*/
        }

        .navigation-content > div {
            display: flex;
            justify-content: space-between;
        }

        .navigation-content > div > div {
            width: 100px;
            padding: 10px;
            text-align: center;
        }


        .content {
            /*flex: 1;*/
            /*overflow: auto;*/
            /*height: 100%;*/
        }


        .footer > div {
            width: 100%;
            text-align: center;
        }

        .design-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #1f1f1f;
            padding: 100px 0;
            font-family: Jost;
        }

        .timeline {
            width: 80%;
            height: auto;
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .timeline-content {
            padding: 20px;
            background: #1f1f1f;
            -webkit-box-shadow: 5px 5px 10px #1a1a1a, -5px -5px 10px #242424;
            box-shadow: 5px 5px 10px #1a1a1a, -5px -5px 10px #242424;
            border-radius: 5px;
            color: white;
            padding: 1.75rem;
            transition: 0.4s ease;
            overflow-wrap: break-word !important;
            margin: 1rem;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .timeline-component {
            margin: 0px 20px 20px 20px;
        }

        @media screen and (min-width: 768px) {
            .timeline {
                display: grid;
                grid-template-columns: 1fr 3px 1fr;
            }

            .timeline-middle {
                position: relative;
                background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
                width: 3px;
                height: 100%;
            }

            .main-middle {
                opacity: 0;
            }

            .timeline-circle {
                position: absolute;
                top: 0;
                left: 50%;
                width: 15px;
                height: 15px;
                border-radius: 50%;
                background-image: linear-gradient(45deg, #F27121, #E94057, #8A2387);
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }
        }


    </style>

</head>
<body class="body">

<div class="content">
    </style>
    <section class="design-section">
        <div class="timeline">
            @foreach($events as $event)
                @if($loop->index % 2 == 0)
                    <x-event-card-left :event="$event"/>
                @else
                    <x-event-card-right :event="$event"/>
                @endif
            @endforeach
        </div>
    </section>
</div>

</body>
</html>
