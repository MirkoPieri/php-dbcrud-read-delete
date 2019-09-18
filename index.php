<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ordina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="master.css">
    <script src="script.js" charset="utf-8"></script>
  </head>
  <body>
    <main>

     <div class="container">
       <div class="stanza">
         <div class="accepted">
           <h1>ACCEPTED</h1>
           <div class="elementi"></div>
         </div>
         <div class="rejected">
           <h1>REJECTED</h1>
           <div class="elementi"></div>
         </div>
         <div class="pending">
           <h1>PENDING</h1>
           <div class="elementi"></div>
         </div>
       </div>
     </div>
    </main>


    <script id="entry-template" type="text/x-handlebars-template">
      <div class="entry" data-id='{{id}}'>
        <p>{{price}}</p>
        <i class="delete">{{x}}</i>
      </div>

    </script>
  </body>
</html>
