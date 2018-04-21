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
    <link rel="icon" 
      type="image/png" 
      href="assets/fav.png">
    <title>Heyou - Find milions of inspiration and download in one time</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body detail-popup">
            <span aria-hidden="true" class="close">&times;</span>
            <figure class="img-wrap">
                <img src="" id="detail_img" width="100%" />
            </figure>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card-body">
                        <span class="label">123RF</span>
                        <h4 class="card-subtitle">Light streak in sky over city at night</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#" target="_blank" class="btn btn-primary">Download</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="search-bar head">
            <img src="./assets/img/logo2.png" alt="img" />
            <div class="label-search">
                <input type="text" placeholder="Search" />
                <submit><i class="fa fa-search"></i></submit>
            </div>
            <select>
                <option>All Format</option>
                <option>PSD</option>
                <option>AI</option>
                <option>JPEG</option>
                <option>Fonts</option>
            </select>
        </div>
        <section class="filter clearfix">
            <span class="products">
                <input type="checkbox" id="123rf" checked /><label for="123rf">123RF</label>
            </span>
            <span class="products">
                <input type="checkbox" id="thj" checked /><label for="thj">The Hungry JPEG</label>
            </span>
            <span class="products">
                <input type="checkbox" id="sui" checked /><label for="sui">Stock Unlimited</label>
            </span>
            <span class="products">
                <input type="checkbox" id="cb" checked /><label for="cb">Craft Bundles</label>
            </span>
            <div class="result">1202 Results</div>
        </section>
        <div class="card-columns result">
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).on("click", ".card.item", function () {
             var imgSrc = $(this).find('.card-img-top').attr('src'),
                 txt =  $(this).find('.card-subtitle').text(),
                 label = $(this).find('.label').text(),
                 url = $(this).data('url');
            
             $(".modal-body #detail_img").attr('src', imgSrc );
             $(".modal-body .label").text(label);
             $(".modal-body .card-subtitle").text(txt);
             $(".modal-body a.btn").attr("href", url);
             $(".modal-body a.btn").attr("href", url);
             // As pointed out in comments, 
             // it is superfluous to have to manually call the modal.
             // $('#addBookDialog').modal('show');

        });


    </script>
    <script src="./assets/load_data.js"></script>
</body>

</html>
