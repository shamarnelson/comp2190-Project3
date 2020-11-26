function Validate(form)
{
    var formInput = {cID: form.cID.value, constID: form.constID.value, pollDivID: form.pollDivID.value, pollStn: form.pollStn.value, 
        votesforCand1: form.votesforCand1.value, votesforCand2: form.votesforCand2.value, rejectedBal: form.rejectedBal.value, totalNumVote: form.totalNumVote.value, 
        hiddenField: form.hiddenField.value  };


        isFieldEmpty(formInputData);
        if(!(validCheck()))
        {
            return false;
        }
        return true;

        function validCheck()
        {
            var validCheck=document.getElementsByName("Error");
            if(validCheck.length>0)
            {
                return false;
            }
            else
            {
                return true;
            }

        }
}