<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="<?=base_url()?>/e-learning/favicon.ico" type="image/gif">

    <!-- bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- own css -->
    <link rel="stylesheet" type="text/css" href="/e-learning/public/assets/css/style.css">
    <!-- quiz lib css -->
    <link rel="stylesheet" type="text/css" href="/e-learning/public/assets/quizlib/quizlib.css">
    
    
    <style>
        /* small screens */
        @media only screen and (max-width:600px){
            .quiz-size{
                width: 100%;
            }

            .lessons-window-size{
                width: 100%;
                padding: 1rem;
            }
        }

        /* large screens */
        @media only screen and (min-width:600px){
            .quiz-size{
                width: 65%;
                margin: auto;
            }
            .lessons-window-size{
                width: 90%;
                margin: 6rem auto;
            }
        }


        .quiz-wrapper{
            border: 2px solid var(--bg-primary);
            box-shadow: 8px 8px 4px #3a286b;
            border-radius: 1rem;
            padding:2rem;
        }

        .quiz-wrapper > .quizlib-question{
            margin-bottom: 2rem;
        }
        body{

            background-color: white;
            color:black;
            transition: var(--transition-speed);
        }

        .darkmode{
            background-color: black;
            color:var(--bg-primary);
            transition: var(--transition-speed);
        }

        h1{
            color:var(--bg-primary);
        }
        
    </style>
        
    <title><?php echo $title?></title>
</head>
<body>