<?php
    function get_amount_row_course(){
        global $conn;
        $strquery = "SELECT COUNT(*) AS AmountRow FROM dbo.Course";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0]['AmountRow'];
    }
    
    function add_course($course_avatar, $course_title, $course_desc, $course_detail, $course_alias){
        $amount_row = (int)get_amount_row_course() + 1;
        global $conn;
        $strquery = "INSERT dbo.Course
            ( CourseId ,CourseAvatar ,CourseTitle ,CourseDesc ,CourseDetail ,CourseAlias ,CreatedDate ,CreatedBy ,ModifiedDate ,ModifiedBy ,CourseStatus )
        VALUES  ( $amount_row ,'' ,N'$course_title' ,'$course_desc' ,'$course_detail' ,'$course_alias' ,GETDATE() ,N'' ,GETDATE() ,N'' , 1)";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return True;
    }
    
    function get_course($course_title){
        global $conn;
        $strquery = "SELECT CourseId FROM dbo.Course WHERE CourseTitle = N'Course Woman PT'";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0]['CourseId'];
    }
    
    function get_amount_row_table_of_content(){
        global $conn;
        $strquery = "SELECT COUNT(*) AS AmountRow FROM dbo.TableOfContent";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0]['AmountRow'];
    }
    
    function add_table_of_content($chapter_title, $chapter_order, $course_id){
        $amount_row = (int)get_amount_row_table_of_content() + 1;
        global $conn;
        $strquery = "INSERT dbo.TableOfContent
        ( TableOfContentId , TableOfContentTitle ,[Order] ,CouseId ,CreatedDate ,CreateBy ,ModifedDate ,ModifiedBy ,Status)
        VALUES  ( $amount_row ,N'$chapter_title' ,$chapter_order , $course_id ,GETDATE() ,NULL , GETDATE() ,NULL ,1)";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return True;
    }
    
    
?>
