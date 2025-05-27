@if (session('success'))
    <div id="simple-alert"
        style="display:none;position:fixed;top:20px;right:20px;background:#4CAF50;color:white;padding:15px;border-radius:4px;z-index:1000;">
        {{ session('success') }}
        <button onclick="document.getElementById('simple-alert').style.display='none'"
            style="background:none;border:none;color:white;margin-left:10px;cursor:pointer">
            &times;
        </button>
    </div>
    <script>
        document.getElementById('simple-alert').style.display = 'block';
        setTimeout(() => {
            document.getElementById('simple-alert').style.display = 'none';
        }, 5000);
    </script>
@endif

@if (session('error'))
    <div id="simple-alert"
        style="display:none;position:fixed;top:20px;right:20px;background:#af4c4c;color:white;padding:15px;border-radius:4px;z-index:1000;">
        {{ session('success') }}
        <button onclick="document.getElementById('simple-alert').style.display='none'"
            style="background:none;border:none;color:white;margin-left:10px;cursor:pointer">
            &times;
        </button>
    </div>
    <script>
        document.getElementById('simple-alert').style.display = 'block';
        setTimeout(() => {
            document.getElementById('simple-alert').style.display = 'none';
        }, 5000);
    </script>
@endif
