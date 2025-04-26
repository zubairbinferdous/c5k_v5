<script src="{{ asset('/')}}public/front/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{ asset('/')}}public/front/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- custom js -->
  <script src="{{ asset('/')}}public/front/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ppgFtbLOIJEDE5sUtr8fDx5ZmTE8aVfdarBFfEZfU8LLTh5xXdx0TGk5gL0Etk5P" crossorigin="anonymous"></script>
  <script>
 
  $(document).ready(function() {
        $('.search-box').on('input', function() {
            let query = $(this).val();

            if (query.length > 2) {
                $.ajax({
                    url: "{{ route('search-result') }}",
                    method: "GET",
                    data: { query: query },
                    success: function(data) {
                        let suggestions = '';

                        // Loop through journals and create suggestion links
                        data.journals.forEach(journal => {
                            suggestions += `<li><a href="{{ url('/journal') }}/${journal.slug}/${journal.id}" class="suggestion-link">${journal.title}</a></li>`;
                        });

                        // Loop through articles and create suggestion links
                        data.articles.forEach(article => {
                            suggestions += `<li><a href="{{ route('article.details', '') }}/${article.id}" class="suggestion-link">${article.title}</a></li>`;
                        });

                        // Loop through news and create suggestion links
                        data.news.forEach(news => {
                            suggestions += `<li><a href="{{ route('news.details', '') }}/${news.id}" class="suggestion-link">${news.title}</a></li>`;
                        });

                        // Loop through blogs and create suggestion links
                        data.blogs.forEach(blog => {
                            suggestions += `<li><a href="{{ route('blog.details', '') }}/${blog.id}" class="suggestion-link">${blog.title}</a></li>`;
                        });

                        // Populate the suggestions list and display it
                        $('.suggestions').html(suggestions).show();
                    }
                });
            } else {
                $('.suggestions').hide();
            }
        });

        // Handle click event on suggestions
        $(document).on('click', 'li', function() {
            $('.search-box').val($(this).text());
            $('.suggestions').hide();
        });
    });
</script>
<script>
    function showPdf(pdfUrl) {
        const pdfViewer = document.getElementById('pdfViewer');
        pdfViewer.src = pdfUrl;
        const modal = new bootstrap.Modal(document.getElementById('pdfViewerModal'));
        modal.show();
    }
</script>
