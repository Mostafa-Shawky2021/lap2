    <script>
        const error = Array.from(document.getElementsByClassName('error'));
        error.forEach( (err)=>{
            setTimeout(()=>{
                err.innerHTML = '';
            },5000);

        } )

    </script>
</body>
</html>