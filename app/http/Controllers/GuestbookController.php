<?php namespace App\Http\Controllers;

use App\Comment;
use Input;
use Redirect;

class GuestbookController extends Controller {

	public function index() {
	    $comment = Comment::orderBy('updated_at','DESC')->get();
	    return view('myview.index')
	        ->with('title', 'Guestbook comments')
	        ->with('comments', $comment);  		
	}

	public function reindex() {
		return Redirect::to('myview/index');
	}

    public function addComment() {
    	$comment = new Comment;
		$comment->name = Input::get('name');
		$comment->comment = Input::get('comment');
		$comment->ip = Input::get('ip');	
		$comment->save();		
		return Redirect::to('myview/index');
    }

    public function editComment($id) {  
       	$comment = Comment::find($id);	
		return View('myview.edit')->with('comments',$comment);		
    }

    public function saveComment($id) {  
       	$comment = Comment::find($id);	
		$comment->name = Input::get('name');
		$comment->comment = Input::get('comment');
		$comment->ip = Input::get('ip');	
		$comment->save();
		return Redirect::to('myview/index');		
    }

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

    public function delete($id) {
    	$comment = Comment::find($id);  
	    $comment->delete();
	    return Redirect::to('myview/index');   
    }
}

?>
