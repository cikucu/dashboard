<script>
        $(function () {
            $ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            $(function () {
                $('#provinsi').on('change', function(){
                    let id_provinsi = $('#provinsi').val();

                    console.log(id_provinsi); 
                })
            });
        });
    </script>