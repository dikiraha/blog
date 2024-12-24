@extends('website.blog.layouts.main')

@section('title', 'Portal')

@section('content')
    <div class="container px-5 my-5">
        <button onclick="window.history.back()" class="btn m-3" style="background-color: #8a8d93; color: white;">
            Back
        </button>
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $portal->title }}</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12 col-xl-12 col-xxl-12">
                <!-- Experience Section-->
                <section>
                    <!-- Experience Card 1-->
                    @foreach ($articles as $article)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col-lg-12 text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">{{ $article->title }}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-control-plaintext" id="description">{!! $article->description !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Experience Card 2-->
                </section>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Function to auto resize the textarea
        function autoResizeTextarea(textarea) {
            textarea.style.height = 'auto'; // Reset height
            textarea.style.height = textarea.scrollHeight + 'px'; // Set new height based on scrollHeight
        }

        // Select the textarea element
        var descriptionTextarea = document.getElementById('description');

        // Call the function initially to adjust the height
        autoResizeTextarea(descriptionTextarea);

        // Optionally, if you allow editing, you can add event listeners:
        descriptionTextarea.addEventListener('input', function() {
            autoResizeTextarea(descriptionTextarea);
        });
    </script>

    <script src="https://cdn.tiny.cloud/1/sz1oi6o8pq1cfgze3fc0htsn882dirr9kgsabr33bapngybz/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea', // Target textarea
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                }
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant")),
            forced_root_block: 'p', // Ensure every new line is wrapped in <p>
            force_p_newlines: true, // Force new lines into paragraphs
            remove_trailing_brs: false // Prevent removing <br> tags at the end
        });
    </script>
@endpush
