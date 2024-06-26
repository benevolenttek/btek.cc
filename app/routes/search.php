<?php
require_once 'app/layouts/html.php';

return function () {
  htmlLayout(
    renderChildren: function () {
?>

    <div class="main">

      <div id="back-button">
        <a aria-label="go-back" href="/">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 96 96" enable-background="new 0 0 96 96" xml:space="preserve">
            <polygon fill="#AAAAAB" points="96,14 82,0 48,34 14,0 0,14 34,48 0,82 14,96 48,62 82,96 96,82 62,48 " />
          </svg>
        </a>
      </div>
      <!--<div id="left-column">-->
      <!--<div id="category" class="facet"></div>-->
      <!--<div id="brand" class="facet"></div>-->
      <!--<div id="price" class="facet"></div>-->
      <!--<div id="type" class="facet"></div>-->
      <!--</div>-->

      <div id="center-column">
        <div id="search-input"></div>
        <div id="search-input-icon"></div>
        <div id="sort-by-wrapper"><span id="sort-by"></span></div>
        <div id="stats"></div>
        <div id="hits"></div>
        <div id="pagination"></div>
      </div>
    </div>

    <!-- /INTERFACE -->

    <!-- TEMPLATES -->
    <script type="text/html" id="hit-template">
      <div class="hit">
        <a href="{{url}}"></a>
        <!--<a href="{{{url}}}">link</a>-->
        <div class="hit-image">
          <img alt="{{name}}" src="{{image}}">
        </div>
        <div class="hit-content">
          <!--<h3 class="hit-price">${{price}}</h3>-->
          <h2 class="hit-name">{{{_highlightResult.title.value}}}</h2>
          <p class="hit-description">{{{_highlightResult.text.value}}}</p>
        </div>
      </div>
    </script>

    <script type="text/html" id="no-results-template">
      <div id="no-results-message">
        <p>We didn't find any results for the search <em>"{{query}}"</em>.</p>
        <a href="." class='clear-all'>Clear search</a>
      </div>
    </script>
    <!-- /TEMPLATES -->

    <!-- SCRIPTS -->
    <script src="/js/instantsearch.min.js"></script>
    <script>
      /* global instantsearch */

      app({
        appId: 'MUZJLD13O2',
        apiKey: '35caa441e6228ea7dbea9db1f8184600',
        indexName: 'btek Main',
      });

      function app(opts) {
        var search = instantsearch({
          appId: opts.appId,
          apiKey: opts.apiKey,
          indexName: opts.indexName,
          urlSync: true,
        });

        search.addWidget(
          instantsearch.widgets.searchBox({
            container: '#search-input',
            placeholder: 'Search',
          })
        );

        search.addWidget(
          instantsearch.widgets.hits({
            container: '#hits',
            hitsPerPage: 10,
            templates: {
              item: getTemplate('hit'),
              empty: getTemplate('no-results'),
            },
          })
        );

        search.addWidget(
          instantsearch.widgets.stats({
            container: '#stats',
          })
        );

        search.addWidget(
          instantsearch.widgets.sortBySelector({
            container: '#sort-by',
            autoHideContainer: true,
            indices: [{
                $name = "opts.indexName, label: 'Most relevant',";
              },
              /*{
               $name = "`${opts.indexName}_price_asc`, label: 'Lowest price',";
               },
               {
               $name = "`${opts.indexName}_price_desc`, label: 'Highest price',";
               }*/
            ],
          })
        );

        /*
         search.addWidget(
         instantsearch.widgets.pagination({
         container: '#pagination',
         scrollTo: '#search-input',
         })
         );

         search.addWidget(
         instantsearch.widgets.refinementList({
         container: '#category',
         attributeName: 'categories',
         sortBy: ['isRefined', 'count:desc', 'name:asc'],
         limit: 10,
         operator: 'or',
         templates: {
         header: getHeader('Category'),
         },
         })
         );

         search.addWidget(
         instantsearch.widgets.refinementList({
         container: '#brand',
         attributeName: 'brand',
         sortBy: ['isRefined', 'count:desc', 'name:asc'],
         limit: 10,
         operator: 'or',
         searchForFacetValues: {
         placeholder: 'Search for brands',
         templates: {
         noResults: '<div class="sffv_no-results">No matching brands.</div>',
         },
         },
         templates: {
         header: getHeader('Brand'),
         },
         })
         );

         search.addWidget(
         instantsearch.widgets.rangeSlider({
         container: '#price',
         attributeName: 'price',
         templates: {
         header: getHeader('Price'),
         },
         })
         );

         search.addWidget(
         instantsearch.widgets.refinementList({
         container: '#type',
         attributeName: 'type',
         sortBy: ['isRefined', 'count:desc', 'name:asc'],
         limit: 10,
         operator: 'and',
         templates: {
         header: getHeader('Type'),
         },
         })
         );
         */

        search.start();
      }

      function getTemplate(templateName) {
        return document.querySelector('#' + templateName + '-template').innerHTML;
      }

      function getHeader(title) {
        return '<h5>' + title + '</h5>';
      }
      var urlParams;
      (window.onpopstate = function() {
        var match,
          pl = /\+/g, // Regex for replacing addition symbol with a space
          search = /([^&=]+)=?([^&]*)/g,
          decode = function(s) {
            return decodeURIComponent(s.replace(pl, " "));
          },
          query = window.location.search.substring(1);

        urlParams = {};
        while (match = search.exec(query))
          urlParams[decode(match[1])] = decode(match[2]);
      })();
      if (urlParams['src']) {
        document.querySelector('#back-button a').href = urlParams['src'];
      }
    </script>
    <!-- /SCRIPTS -->
<?php
    }
  );
};
