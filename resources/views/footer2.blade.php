 <footer id="footer">
                  <p class="copyright">&copy; <a href="https:\\www.untan.ac.id">Universitas Tanjungpura</a>.</p>
                </footer>

            </div>
          </div>

      </div>

    <!-- Scripts -->
      <script src="{{ asset('user/js/jquery.min.js')}}"></script>
      <script src="{{ asset('user/js/skel.min.js')}}"></script>
      <script src="{{ asset('user/js/util.js')}}"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="{{ asset('user/js/main.js')}}"></script>
      <!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
  </body>
</html>
