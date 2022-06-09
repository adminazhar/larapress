@foreach($posts as $post)
  <a href="{{ route('posts.show', $post ) }}">
    {{ $post->post_title }}
  </a>
@endforeach
{{ $posts->links() }}