@if(Session::has('success'))
<div class="fixed right-4 top-4 px-10 py-2 border border-blue-500 text-blue-600 rounded-lg shadow-lg font-bold text-lg bg-blue-50" id="alert">
    <p>{{session('success')}}</p>
</div>
<script>
    // Hide the alert after 3 seconds
    setTimeout(function() {
        document.getElementById('alert').style.display = 'none';
    }, 3000);
</script>
@endif
