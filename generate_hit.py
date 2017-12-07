import pickle

upper_const_str = """
    <HTMLQuestion xmlns="http://mechanicalturk.amazonaws.com/AWSMechanicalTurkDataSchemas/2011-11-11/HTMLQuestion.xsd">
     <HTMLContent><![CDATA[

     <!-- YOUR HTML BEGINS -->
     <!DOCTYPE html>
     <html>
     <head>
     <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
     <script type='text/javascript' src='https://s3.amazonaws.com/mturk-public/externalHIT_v1.js'></script>
     </head>
     <body>
     <form name='mturk_form' method='post' id='mturk_form' action='https://www.mturk.com/mturk/externalSubmit'><input type='hidden' value='' name='assignmentId'                id='assignmentId'/>
     <p>Select the between A and B, the image that seems more similar to the original, if unsure, select the "Unsure" option :</p>
    """

lower_const_string = """
   <div>
     <button type="submit">Submit</button>
   </div>
</form>
 <script language='Javascript'>turkSetAssignmentID();</script>
 </body></html>
 <!-- YOUR HTML ENDS -->
 ]]>
</HTMLContent>

<FrameHeight>600</FrameHeight>

</HTMLQuestion>
"""

if __name__ == "__main__":
    with open('url_struct.pkl','rb') as f:
        url_struct = pickle.load(f)

    final_xml = "" + upper_const_str
    for i in range(10):
        # This is one "question"
        question = """
           <div>
             <img src="{0}" alt="Original" width="64" height="64">
             <p> Original </p>

             <img src="{1}" alt="Image A" width="64" height="64">
             <p> Image A </p>

             <img src="{2}" alt="Image B" width="64" height="64">
             <p> Image B </p>
             <input type="radio" id="{1}" name="{0}" value="{1}">
             <label for="{1}">Image A</label>

             <input type="radio" id="{2}" name="{0}" value="{2}">
             <label for="{2}">Image B</label>

             <input type="radio" id="{0}" name="{0}" value="Unsure">
             <label for="{0}">Unsure</label>
           </div>
           <!-- 1 question ends -->
        """.format(
            url_struct[i][0],
            url_struct[i][1][0],
            url_struct[i][1][1])

        final_xml = final_xml + question



    final_xml = final_xml + lower_const_string
    #Write to file
    with open('test.xml','w') as f:
        f.write(final_xml)

