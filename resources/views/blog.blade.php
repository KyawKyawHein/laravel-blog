@props(["randomBlogs"])
<x-layout>
    <!-- singloe blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <div>
            <div>Author - <a href="/authors/{{$blog->author->name}}">{{$blog->author->name}}</a></div>
            <div>
                <a href="/categories/{{$blog->category->slug}}"><span class="badge bg-primary">{{$blog->category->name}}</span></a>
            </div>
            <div class="text-secondary">{{$blog->created_at}}</div>
          </div>
          <h3 class="my-3">{{$blog->title}}</h3>
          <p class="lh-md">
           {{$blog->body}}
          </p>
        </div>
      </div>
    </div>

    <!-- subscribe new blogs -->
    <x-subscribe/>
    <x-blogs_you_may_like :randomBlogs="$randomBlogs" />
</x-layout>