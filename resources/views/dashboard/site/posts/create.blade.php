<x-app-layout>
    <x-kwd.panel>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Страницы</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> </p>

        @livewire('dashboard.site.post.form')




    </x-kwd.panel>
</x-app-layout>
@section('css')

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @endsection
    @section('js')
        <script>
            $('#description').summernote({
                tabsize: 2,
                height: 360,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['codeview', 'help']]
                ],

            });

        </script>
    @endsection