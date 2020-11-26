function Validate(form)
{
    var formInput = {cID: form.cID.value, constID: form.constID.value, pollDivID: form.pollDivID.value, pollStn: form.pollStn.value, 
        votesforCand1: form.votesforCand1.value, votesforCand2: form.votesforCand2.value, rejectedBal: form.rejectedBal.value, totalNumVote: form.totalNumVote.value, 
        hiddenField: form.hiddenField.value  };


        isEmpty(formInput);
        isInteger(formInput);
        isAlpha(formInput);
        equalVotes(formInput);

        if(!(validCheck()))
        {
            return false;
        }
        return true;

        function isEmpty(noentry){
            for (var entry in noentry)
            {
                if (noentry[entry] == "" || noentry[entry] == null)
                {
                    document.getElementById(entry).classList.remove("EntryValid");
                    document.getElementById(entry).classList.add("EntryInvalid")
            
                }
                else
                {
                    document.getElementById(entry).classList.remove("EntryInvalid");
                    document.getElementById(entry).classList.add("EntryValid")
       
                }
            }


        }


        function equalVotes()
        {
            if ((formInput[""]))
        }
        

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