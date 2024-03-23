<?

namespace App\Service;
use App\Modal\CourseCategory;

interface CourseCategoryService{
    public  function getAllCourseCategory();
    public  function addCourseCategory($type,$details);
}

Class CourseService extends CourseCategory{
    private $course=[];
    public  function getAllCourseCategory(){
        
        return $this->course;
    }
    public  function addCourseCategory($type,$details){
        $getAll = new CourseCategory($type,$details);
    }
}