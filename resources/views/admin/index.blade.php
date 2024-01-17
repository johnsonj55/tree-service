@extends('layouts.app')

@section('content')
<div class="gray-section" style="background-color: #001800;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-card text-center">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
            
                        <form method="post" action="{{ route('admin.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="homepage_text">Homepage Main Paragraph Text:</label><br>
                                <textarea class="form-control" id="homepage_text" name="homepage_text" rows="8"
                                    style="width: 400px;">{{ $content->homepage_text ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="telephone_number">Request Quote Telephone Number:</label><br>
                                <input type="tel" class="form-control" id="telephone_number" name="telephone_number"
                                    value="{{ $content->telephone_number ?? '' }}" style="width: 400px;">
                            </div>

                            <!-- Add file input fields for each image -->
                            <div class="form-group">
                                <label for="image_1">Image 1:</label>
                                <input type="file" class="form-control-file" id="image_1" name="image_1">
                                @if ($content->image_path_1)
                                    <img src="{{ $content->getImageUrl1Attribute() }}" alt="Image 1">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="image_2">Image 2:</label>
                                <input type="file" class="form-control-file" id="image_2" name="image_2">
                                @if ($content->image_path_2)
                                    <img src="{{ $content->getImageUrl2Attribute() }}" alt="Image 2">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="image_3">Image 3:</label>
                                <input type="file" class="form-control-file" id="image_3" name="image_3">
                                @if ($content->image_path_3)
                                    <img src="{{ $content->getImageUrl3Attribute() }}" alt="Image 3">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Content</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="content">
        <div class="content-padding">
       
        <div class="gray-section">
            <!-- Black Transparent Blocks Section -->
            <p><h3>References</h3></p><br><br>  
                <!-- Individual Black Transparent Blocks with Text -->
                <br>br = skip a line 
                <br>p = its own paragraph 
                <br>b = bold    
            <!-- Individual Service Blocks -->
 <br>
   
</div>
 

            <!-- References Section -->
             
    </section>
<script>
    function uploadImage(input, previewId) {
        const fileInput = input;
        const preview = document.getElementById(previewId);

        const file = fileInput.files[0];
        const formData = new FormData();
        formData.append('image_1', file);

        // Make an asynchronous request to upload the image
        fetch('{{ route('admin.upload') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            // Update the image preview with the uploaded image
            preview.src = data.url;
        })
        .catch(error => console.error('Error:', error));
    }
</script>
@endsection
