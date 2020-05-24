(function($) {
    $.fn.timeline = function() {
    var selectors = {                               
      id: $(this),                                  /*prende il timeline-container*/
      item: $(this).find(".timeline-item"),         /*prende i timeline-item*/
      activeClass: "timeline-item--active",         /*timeline-item--active nel css*/
      img: ".timeline__img"                         /*classe delle immagini nella timeline*/
    };
    selectors.item.eq(0).addClass(selectors.activeClass); /*Seleziona il primo timeline-item (indice 0) e aggiunge la classe timeline-item--active*/
    selectors.id.css(              /*Setta la proprietà background-image del css del timeline-container*/
      "background-image",          /*con l'immagine contenuta nel timeline-item iniziale.*/
      "url(" +                     
        selectors.item
          .first()
          .find(selectors.img)
          .attr("src") +
        ")"
    );
    var itemLength = selectors.item.length; /*Itemlength e` il numero di elementi con classe timeline-item*/
    $(window).scroll(function() {        /*Quando si verifica lo scroll della pagina*/
      var max, min;                            
      var pos = $(this).scrollTop();     /*Prende la posizione verticale corrente in pixel della pagina*/
      selectors.item.each(function(i) {    /*Itera gli elementi con classe timeline-item e per ognuno esegue la funzione interna all'each*/
        min = $(this).offset().top;        /*Prende la distanza verticale in pixel dell'item dal top della finestra*/
        max = $(this).height() + $(this).offset().top;   /*Somma l'altezza corrente dell'item con il valore in min*/
        if (i == itemLength - 2 && pos > min + $(this).height() / 2) {  
          selectors.item.removeClass(selectors.activeClass);  /*Toglie la classe timeline-item--active*/
          selectors.id.css(             /*Setta la proprietà background-image del css del timeline-container*/
            "background-image",         /*con l'immagine contenuta dell'ultimo timeline-item.*/
            "url(" +
              selectors.item
                .last()
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.last().addClass(selectors.activeClass); /*Seleziona l'ultimo timeline-item e aggiunge la classe timeline-item--active*/
        } else if (pos <= max - 40 && pos >= min) {
          selectors.id.css(              /*Stesso funzionamento della parte precedente ma in questo caso*/
            "background-image",          /*per gli item durante lo scroll della pagina.*/
            "url(" +
              $(this)
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          $(this).addClass(selectors.activeClass);
        }
      });
    });
  };
})(jQuery);

  

$("#timeline-1").timeline();