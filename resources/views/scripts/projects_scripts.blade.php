{{-- <script>
    $(document).ready(function(){
        
        $('#project_info_table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('projects_data') }}",
            },
            columns: [
                { data: 'actions', name: 'actions', orderable:false },
                { data: 'project_code', name: 'project_code', defaultContent: 'N/A'},
                { data: 'project_name', name: 'project_name' , defaultContent: 'N/A'},
                { data: 'project_stage', name: 'project_stage' , defaultContent: 'N/A'},
                { data: 'project_type', name: 'project_type' , defaultContent: 'N/A'},
                { data: 'project_subtype', name: 'project_subtype' , defaultContent: 'N/A'},
                { data: 'project_att_final', name: 'project_att_final' , defaultContent: 'N/A'},
                { data: 'project_size_final', name: 'project_size_final' , defaultContent: 'N/A'},
                { data: 'created_at', name: 'created_at' },
            ]
        });
        $('#project_form').on('submit', function(event){
            event.preventDefault(); 
            var formData = new FormData($('#project_form')[0]);
            $.ajax({
            url: "{{ route('projects.store') }}",
            method:"POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(result){
                if(result.errors){
                    for(var count = 0; count < result.errors.length; count++){
                        toastr.error(result.errors[count]);
                    }
                }
                if (result.success) {
                    $('#add_new_project_modal').modal('hide');
                    $('#project_form')[0].reset();
                    $('#project_info_table').DataTable().ajax.reload();
                    toastr.success(result.success);
                }
            }
            });
        });
    })
</script> --}}