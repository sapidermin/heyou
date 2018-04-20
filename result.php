<?php ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css" />

    <title>Bootstrap 4 Masonry (Pinterest Style) Layout Example</title>
</head>

<body>
    <div class="container">
        <div class="search-bar head">
                <img src="./assets/img/logo.png" alt="img" />
                <div class="label-search">
                    <input type="text" placeholder="Search" />
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
        <div class="card-columns">
           
                <div class="card">
                    <div class="card-header">
                        Card Header
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Each Card body can have a title</h3>
                        <h4 class="card-subtitle">And a subtitle</h4>
                        <p class="card-text">This is a card body 1</p>
                    </div>


                    <div class="card-body">
                        <h3 class="card-title">Card body 2 title</h3>
                        <h4 class="card-subtitle">And subtitle</h4>
                        <p class="card-text">You can also add a second body or even more</p>
                    </div>
                    <img class="card-img-bottom" src="https://source.unsplash.com/daily" alt="Card image bottom">
                    <div class="card-footer">
                        Card Footer
                    </div>
                </div>
          
          
                <div class="card">

                    <img class="card-img-top" src="https://source.unsplash.com/daily?nature" alt="Card image top">
                    <div class="card-img-overlay">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can use the cap image as an overlay for the body</p>
                    </div>
                </div>

                <div class="card">

                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image top">
                    <div class="card-img-overlay white">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add links to card body</p>
                        <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div>
    
                <div class="card  card-primary p-3 text-center">
                    <ul class="list-group">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>

                </div>

                <div class="card text-white border-danger bg-danger p-1 text-center">

                    <div class="card-body">
                        <h2 class="card-title"> My Card</h2>
                        <p class="card-text"> This is a simple centered text </p>
                    </div>

                </div>
 
                <div class="card text-primary border-primary">

                    <div class="card-body">
                        <h2 class="card-title"> My List</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                            <li class="list-group-item">Item 3</li>
                        </ul>
                    </div>

                </div>

                <div class="card border-danger text-primary">
                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Card text</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Tab 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tab 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tab 3</a>
                            </li>
                        </ul>
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add navigation (navigation and pills) to card header</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <ul class="nav  nav-pills card-header-pill">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Pill 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pill 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pill 3</a>
                            </li>
                        </ul>
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily?wood" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add navigation (navigation and pills) to card header</p>
                    </div>
                </div>

                <div class="card text-white bg-dark mt-5">
                    <div class="card-header">This is a Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a text </p>
                    </div>
                </div>
            
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
