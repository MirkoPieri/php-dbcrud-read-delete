function init() {
  getData(); //stampo dati ad apertura pagina

  $(document).on('click', 'i.delete', deleteData); //cancellazione al click
} //funzione principale

$(document).ready(init);


function getData() {

  $('.container .stanza div div').html(''); //pulisco html

  $.ajax({
    url: 'dati1.php',
    method: 'GET',
    success: function(data) {
      var dati = data;

      if (dati == null) {
        var source   = document.getElementById("entry-template").innerHTML;
        var template = Handlebars.compile(source);

        var context = {price: 'Nessun Pagamento'};
        var html    = template(context);
        $('.container .stanza div .elementi').append(html);
      }
      for (var i = 0; i < dati.length; i++) {
        var datoSel = dati[i];

        var source   = document.getElementById("entry-template").innerHTML;
        var template = Handlebars.compile(source);

        if (datoSel.status == 'accepted') {

          var context = {status: datoSel.status, price: datoSel.price, id: datoSel.id, x: 'X'};
          var html    = template(context);
          $('.container .stanza .'+datoSel.status + ' .elementi').append(html);
        } else if (datoSel.status == 'pending') {
          var context = {status: datoSel.status, price: datoSel.price, id: datoSel.id, x: 'X'};
          var html    = template(context);
          $('.container .stanza .'+datoSel.status + ' .elementi').append(html);
        } else {
          var context = {status: datoSel.status, price: datoSel.price, id: datoSel.id, x: 'X'};
          var html    = template(context);
          $('.container .stanza .'+datoSel.status + ' .elementi').append(html);
        }
      }
    },
    error: function() {
      console.log('Errore');
    }
  })
} //per prendere elementi

function deleteData() {
  var elemento = $(this);
  var name = elemento.parent();
  var numId = name.data('id'); //prendo id

  $.ajax({
    url: 'dataDel.php',
    method: 'GET',
    data: {id: numId},
    success: function() {
      getData(); //stampo nuovamente i dati
    },
    error: function() {

    }
  });
} //per cancellare elementi
