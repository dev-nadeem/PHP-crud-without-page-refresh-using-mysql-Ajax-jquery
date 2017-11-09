<html>
  <head>
        <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body>
      <div id="employee" style="width: 80%; margin:auto;"></div>
      <script type="text/javascript">
        $(document).ready(function(){
              $('#employee').jtable({
                title: 'PHP Crud with the help of Ajax',
                pageSize:5,
                paging:true,
                sorting: true,
                defaultSorting : 'fname ASC',
                actions:{
                    listAction:'process.php?action=list',
                    createAction:'process.php?action=create',
                    updateAction:'process.php?action=update',
                    deleteAction:'process.php?action=delete',
                },
                fields:{
                    emp_id:{
                        key:true,
                        create:false,
                        edit:false,
                        list:false
                    },
                    fname:{
                        title:'First Name',
                        width:'35%'
                    },
                    lname:{
                        title:'Last Name',
                        Width:'35%'
                    },
                    salary: {
                        title:'Salary',
                        width:'35%',
                    }
                }
            });
            $('#employee').jtable('load');
        });
      </script>
  </body>
</html>
