<script>
    $(document).ready(function(){
        

        $('#relevance_obligation').on('change', function() {
            var relevance = this.value;
            // console.log(relevance);
            if (relevance == 'ABP'){
                document.getElementById("results_relevance").value = '30';
            }else if(relevance == 'CSP'){
                document.getElementById("results_relevance").value = '30';
            }else if(relevance == 'SOB'){
                document.getElementById("results_relevance").value = '30';
            }else if(relevance == 'NSO'){
                document.getElementById("results_relevance").value = '30';
            }else if(relevance == 'PCA'){
                document.getElementById("results_relevance").value = 'Recovery disallowed/Audit discontinued';
            }else if(relevance == 'CSR'){
                document.getElementById("results_relevance").value = 'Recovery disallowed/Audit discontinued';
            }else if(relevance == 'PRA'){
                document.getElementById("results_relevance").value = 'Recovery disallowed/Audit discontinued';                    
            }else{

            }
        });
        $('#adequate_planning').on('change', function() {
            var adequate= this.value;
            // console.log(adequate;
            if (adequate== 'AVS'){
                document.getElementById("results_adequate").value = '10';
            }else if(adequate== 'DPS'){
                document.getElementById("results_adequate").value = '10';
            }else if(adequate== 'UNS'){
                document.getElementById("results_adequate").value = '0';
            }else if(adequate== 'NFS'){
                document.getElementById("results_adequate").value = '0';
            }else{

            }
        });
        $('#risk_assessment_mitigation').on('change', function() {
            var risk = this.value;
            // console.log(risk);
            if (risk == 'ANS'){
                document.getElementById("results_risk").value = '10';
            }else if(risk == 'APR'){
                document.getElementById("results_risk").value = '10';
            }else if(risk == 'UNR'){
                document.getElementById("results_risk").value = '0';
            }else{

            }
        });
        $('#procurement_process').on('change', function() {
            var procure = this.value;
            // console.log(procure);
            if (procure == 'PBP'){
                document.getElementById("results_procurement").value = '20';
            }else if(procure == 'PDA'){
                document.getElementById("results_procurement").value = '20';
            }else if(procure == 'NPB'){
                document.getElementById("results_procurement").value = '0';
            }else if(procure == 'PDU'){
                document.getElementById("results_procurement").value = '0';
            }else{

            }
        });
        $('#cost_within_benchmark').on('change', function() {
            var cost = this.value;
            // console.log(cost);
            if (cost == 'CAE'){
                document.getElementById("results_cost").value = '30';
            }else if(cost == 'CAG'){
                document.getElementById("results_cost").value = '0';
            }else{

            }
        });
        $('#timeliness').on('change', function() {
            var risk = this.value;
            // console.log(risk);
            if (risk == 'ONT'){
                document.getElementById("results_timeliness").value = '25';
            }else if(risk == 'SLB'){
                document.getElementById("results_timeliness").value = '15';
            }else if(risk == 'SLG'){
                document.getElementById("results_timeliness").value = '0';
            }else{

            }
        });
        $('#safety').on('change', function() {
            var risk = this.value;
            // console.log(risk);
            if (risk == 'NMA'){
                document.getElementById("results_safety").value = '15';
            }else if(risk == 'NMI'){
                document.getElementById("results_safety").value = '5';
            }else if(risk == 'AMI'){
                document.getElementById("results_safety").value = '0';
            }else{

            }
        });

        $('#specifications').on('change', function() {
            var risk = this.value;
            // console.log(risk);
            if (risk == 'AAP'){
                document.getElementById("results_specifications").value = '10';
            }else if(risk == 'OBA'){
                document.getElementById("results_specifications").value = '0';
            }else{

            }
        });
        $('#final_costs').on('change', function() {
            var risk = this.value;
            // console.log(risk);
            if (risk == 'COB'){
                document.getElementById("results_final_costs").value = '25';
            }else if(risk == 'COM'){
                document.getElementById("results_final_costs").value = '15';
            }else if(risk == 'COA'){
                document.getElementById("results_final_costs").value = '0';
            }else{

            }
        });
        
        
        // $('.results_relevance').on('keyup', function(){
        //         var recovery = $(this).attr('id');
        //         $('#results_cost').val(percent_recovery_to_fixed);

        //     });
        $('#test_perform_form').on('submit', function(event){
            event.preventDefault(); 
            var formData = new FormData($('#test_perform_form')[0]);
            $.ajax({
            url: "{{ route('audittest.store') }}",
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
                    $('#add_new_audit').modal('hide');
                    $('#test_perform_form')[0].reset();
                    // $('#project_info_table').DataTable().ajax.reload();
                    toastr.success(result.success);
                }
            }
            });
        });
    })
    function getVal(){
        var test = document.getElementById('test_to_perform').value;
        if(test == 'PRUDENCE'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var prcres = document.getElementById('results_procurement').value;
            var cstres = document.getElementById('results_cost').value;

            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numprc = Number(prcres);
            var numcst = Number(cstres);

            var resupr = numrel+numadq+numrsk+numprc+numcst;
            alert(resupr);
             document.getElementById("total_score").value = '100';


        }else if(test == 'PRUDENCE AND EFFICIENCY'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var prcres = document.getElementById('results_procurement').value;
            var cstres = document.getElementById('results_cost').value;
            var tmlres = document.getElementById('results_timeliness').value;
            var sftres = document.getElementById('results_safety').value;
            var spcres = document.getElementById('results_specifications').value;
            var fcsres = document.getElementById('results_final_costs').value;
            
            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numprc = Number(prcres);
            var numcst = Number(cstres);
            var numtml = Number(tmlres);
            var numsft = Number(sftres);
            var numspc = Number(spcres);
            var numfcs = Number(fcsres);
           
            var total = numrel+numadq+numrsk+numprc+numcst+numtml+numsft+numspc+numfcs;
            var respre = total / 2;
            document.getElementById("total_score").value = respre;


        }else{
            document.getElementById("total_score").value = 'NA';

        }

        // total_score
        
    }

</script>