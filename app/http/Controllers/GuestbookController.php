//ส่วนของ GuestbookControllers.php จะเป็นการสร้าง Class เเละพวก Function ต่างๆให้กับ WebApp ของเรา
<?php namespace App\Http\Controllers;

use App\Comment;
use Input;
use Redirect;

class GuestbookController extends Controller {
	//หน้าเเรก
	public function index() {
	    $comment = Comment::orderBy('updated_at','DESC')->get();
	    return view('myview.index')
	        ->with('title', 'Guestbook comments')
	        ->with('comments', $comment);  		
	}
	//เรียกหน้าเเรกอีกครั้ง
	public function reindex() {
		return Redirect::to('myview/index');
	}
	
	
	//เพิ่ม Comment
    public function addComment() {
    	$comment = new Comment;
		$comment->name = Input::get('name');
		$comment->comment = Input::get('comment');
		$comment->ip = Input::get('ip');	
		$comment->save();		
		return Redirect::to('myview/index');
    }
	
	// ก้ไข Comment
    public function editComment($id) {  
       	$comment = Comment::find($id);	
		return View('myview.edit')->with('comments',$comment);		
    }
	// save comment
    public function saveComment($id) {  
       	$comment = Comment::find($id);	
		$comment->name = Input::get('name');
		$comment->comment = Input::get('comment');
		$comment->ip = Input::get('ip');	
		$comment->save();
		return Redirect::to('myview/index');		
    }
	// ค้นหา
    public function search() {
    	$query = Input::get('search');
	    //print_r($query);
	    $comment = Comment::where('comment','LIKE','%'.$query.'%')->get();
	    $count = Comment::where('comment','LIKE','%'.$query.'%')->count();
	    print_r("count =" + $count );
	    //dd(DB::getQueryLog());
	    //print_r($comment);
	    return view('myview.search')
	        ->with('title', 'Guestbook comments')
	        ->with('comments', $comment)
	        ->with('count', $count);  
    }
	// ลบ Comment ที่ได้เพิ่มเอาไว้
    public function delete($id) {
    	$comment = Comment::find($id);  
	    $comment->delete();
	    return Redirect::to('myview/index');   
    }
}

?>
