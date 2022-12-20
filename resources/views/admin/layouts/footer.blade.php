<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2022</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('template/dist/assets/js/scripts.js') }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('template/dist/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('template/dist/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>        
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('template/dist/assets/js/datatables-demo.js') }}"></script>

    <script>
        $( function() {
            $( "#datepicker" ).datepicker({dateFormat:"yy-mm-dd"}).val();
        });
    </script>
    <script>
        $( function() {
            $( "#datepicker1" ).datepicker({dateFormat:"yy-mm-dd"}).val();
        });
    </script>

    <script type="text/javascript">
        $('#mail').on('change',function(){

            if(this.value==="1"){
                $('#department').show()
            }else{
                $('#department').hide()
            }
            if(this.value==="2"){
                $('#person').show()
            }else{
                $('#person').hide()
            }

            })
            </script>
    </body>
</html>