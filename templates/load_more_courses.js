var ajaxButton = jQuery('#ajax');
var results = jQuery('#results');
var currentPage = 2;
var pagesTotal;
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];

ajaxButton.on('click', function(e) {
  e.preventDefault();
  jQuery.ajax({
    url: baseUrl + '/wp-json/wp/v2/course/?per_page=4&page=' + currentPage,
    beforeSend: function() {
      ajaxButton.attr('disabled', true); // Disable button while ajax request is in progress
    },
    success: function(data, textStatus, request) {
      
      if (!pagesTotal) {
        pagesTotal = request.getResponseHeader('x-wp-totalpages'); // Get total pages
      }
      if ( currentPage <= pagesTotal ) {
        for (var i = 0; i < data.length; i++) {
          results.append(
            "<div class='column'>" +
                "<h3>" + data[i].title.rendered + "</h3>" +
                "<p>" +  + "</p>" +
                "<a class='button' href='" + data[i].link + "'>Learn More</a>" +
            "</div>"
            ); // Add current post to list
        }
      }
      if ( currentPage == pagesTotal ) {
        ajaxButton.remove(); // Remove button if last page is reached
      }
      currentPage++; // Move to next page
    },
    complete: function() {
      ajaxButton.attr('disabled', false); // Enable button after ajax request is complete
    },
    cache: false
  })
});