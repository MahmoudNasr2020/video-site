<script>
      $(document).ready(function(){
        @include('website.comments.ajax.comments')
        @include('website.comments.ajax.update')
        @include('website.comments.ajax.edit')
        @include('website.comments.ajax.delete')
        @include('website.comments.ajax.add')
        @include('website.comments.ajax.like')

      });

</script>
