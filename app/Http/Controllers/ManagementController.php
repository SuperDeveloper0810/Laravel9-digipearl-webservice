<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Menu;
use App\Models\Service;
use App\Models\Contact_info;
use App\Models\Review;
use Illuminate\Support\Facades\File;
class ManagementController extends Controller
{
    public function userIndex(){
        $contact_infos = Contact_info::all();
        $services = Service::all();
        $menus = Menu::all();
        $posts = Post::paginate(3);
        return view('./index', ['menu'=>$menus, 'services'=>$services, 'posts'=>$posts, 'contact_infos'=>$contact_infos]);
    }

    public function login(Request $request){
        $userName = $request->user_name;
        $password = $request->password;

        $userInfo = User::where('user_name', $userName)->get()[0];
        if ($userInfo->id) {
            if ($userInfo->password == $password) {
                return json_encode(['status'=>1, 'userInfo'=>$userInfo]);
            }else{
                return json_encode(['status'=>0]);
            }
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function index(Request $request){
        $users = User::all();

        $contact_infos = Contact_info::all();

        $services = Service::all();

        $menus = Menu::all();

        $posts = Post::paginate(1);

        $reviews = Review::all();

        return view('admin.management', 
        [
            'users'=>$users,
            'contact_infos'=>$contact_infos, 
            'services'=>$services,
            'menus'=>$menus,
            'posts'=>$posts,
            'reviews'=>$reviews
        ]);
    }

    // user management

    public function user_store(Request $request){
        $user_name = $request->user_name;
        $full_name = $request->full_name;
        $position = $request->position;
        $password = $request->password;
        $description = $request->description;

        $isExist = $this->isExist_user($user_name);
        if (!$isExist) {
            $userInfo = User::create(['user_name'=>$user_name, 'full_name'=>$full_name, 'password'=>$password, 'position'=>$position, 'description'=>$description]);
            $fileName = time().'.'.$request->user_avatar->extension();  
             
            $request->user_avatar->move(public_path('uploads/avatars'), $fileName);
            $userInfo->avatar_url = '/uploads/avatars/'.$fileName;
            $userInfo->save();
            return json_encode(['status'=>1, 'userInfo'=>$userInfo]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function isExist_user($user_name){
        $user = User::where('user_name', $user_name)->get();
        if (count($user) > 0) {
            return 1;
        }else {
            return 0;
        }
    }

    public function user_view(Request $request){
        $userId = $request->userId;
        $userInfo = User::find($userId);
        return json_encode(['userInfo'=>$userInfo]);
    }

    public function user_edit(Request $request){
        $userId = $request->userId;
        $userInfo = User::find($userId);
        // dd($userInfo->id);
        // exit();
        if ($userInfo->id) {
            $userInfo->user_name = $request->user_name;
            $userInfo->full_name = $request->full_name;
            $userInfo->password = $request->password;
            $userInfo->position = $request->position;
            $userInfo->description = $request->description;
            if (!File::exists($userInfo->avatar_url)) {
                File::delete(public_path($userInfo->avatar_url));
            }
            $fileName = time().'.'.$request->user_avatar->extension();  
            $request->user_avatar->move(public_path('uploads/avatars'), $fileName);
            $userInfo->avatar_url = '/uploads/avatars/'.$fileName;
            $userInfo->save();
    
            return json_encode(['status'=>1, 'userInfo'=>$userInfo]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function user_delete(Request $request){
        $userId = $request->userId;
        $userInfo = User::find($userId);
        if ($userInfo->id) {
            if (!File::exists($userInfo->avatar_url)) {
                File::delete(public_path($userInfo->avatar_url));
            }
            $userInfo->delete();
            return json_encode(['status'=>1]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    // post management

    public function post_store(Request $request){
        $postTitle = $request->postTitle;
        $postContent = $request->postContent;
        $postInfo = Post::create(['title'=>$postTitle, 'content'=>$postContent]);
        $fileName = time().'.'.$request->postImage->extension();  
             
        $request->postImage->move(public_path('uploads/posts'), $fileName);
        $postInfo->image_url = '/uploads/posts/'.$fileName;
        $postInfo->save();
        return json_encode(['status'=>1, 'postInfo'=>$postInfo]);
    }

    public function post_view(Request $request){
        $postId = $request->postId;
        $postInfo = Post::find($postId);
        return json_encode(['postInfo'=>$postInfo]);
    }

    public function post_edit(Request $request){
        $postId = $request->postId;
        $postInfo = Post::find($postId);
        // dd($userInfo->id);
        // exit();
        if ($postInfo->id) {
            $postInfo->title = $request->postTitle;
            $postInfo->content = $request->postContent;
            if (!File::exists($postInfo->image_url)) {
                File::delete(public_path($postInfo->image_url));
            }
            $fileName = time().'.'.$request->postImage->extension();  
            $request->postImage->move(public_path('uploads/posts'), $fileName);
            $postInfo->image_url = '/uploads/posts/'.$fileName;
            $postInfo->save();
    
            return json_encode(['status'=>1, 'postInfo'=>$postInfo]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function post_delete(Request $request){
        $postId = $request->postId;
        $postInfo = post::find($postId);
        if ($postInfo->id) {
            if (!File::exists($postInfo->avatar_url)) {
                File::delete(public_path($postInfo->avatar_url));
            }
            $postInfo->delete();
            return json_encode(['status'=>1]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    // contact_info management

    public function contact_store(Request $request){
        $contactInfoType = $request->contactInfoType;
        $contactInfoValue = $request->contactInfoValue;

        $contactInfo = Contact_info::create([
            'type'=>$contactInfoType, 
            'info'=>$contactInfoValue
        ]);
        return json_encode(['status'=>1, 'contactInfo'=>$contactInfo]);
    }

    public function contact_view(Request $request){
        $contactInfoId = $request->contactInfoId;
        $contactInfo = Contact_Info::find($contactInfoId);
        return json_encode(['contactInfo'=>$contactInfo]);
    }

    public function contact_edit(Request $request){
        $contactInfoId = $request->contactInfoId;
        $contactInfo = Contact_Info::find($contactInfoId);
        // dd($userInfo->id);
        // exit();
        if ($contactInfo->id) {
            $contactInfo->type = $request->contactInfoType;
            $contactInfo->info = $request->contactInfoValue;
            $contactInfo->save();
            return json_encode(['status'=>1, 'contactInfo'=>$contactInfo]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function contact_delete(Request $request){
        $contactInfoId = $request->contactInfoId;
        $contactInfo = Contact_Info::find($contactInfoId);
        if ($contactInfo->id) {
            $contactInfo->delete();
            return json_encode(['status'=>1]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    // service management

    public function service_store(Request $request){
        $serviceName = $request->serviceName;
        $serviceLink = $request->serviceLink;

        $serviceInfo = Service::create([
            'name'=>$serviceName, 
            'link'=>$serviceLink
        ]);
        return json_encode(['status'=>1, 'serviceInfo'=>$serviceInfo]);
    }

    public function service_view(Request $request){
        $serviceId = $request->serviceId;
        $serviceInfo = Service::find($serviceId);
        return json_encode(['serviceInfo'=>$serviceInfo]);
    }

    public function service_edit(Request $request){
        $serviceId = $request->serviceId;
        $serviceInfo = Service::find($serviceId);
        if ($serviceInfo->id) {
            $serviceInfo->name = $request->serviceName;
            $serviceInfo->link = $request->serviceLink;
            $serviceInfo->save();
            return json_encode(['status'=>1, 'serviceInfo'=>$serviceInfo]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function service_delete(Request $request){
        $serviceId = $request->serviceId;
        $serviceInfo = Service::find($serviceId);
        if ($serviceInfo->id) {
            $serviceInfo->delete();
            return json_encode(['status'=>1]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    // menu management

    public function menu_store(Request $request){
        $menuName = $request->menuName;
        $menuLink = $request->menuLink;

        $menuInfo = Menu::create([
            'name'=>$menuName, 
            'link'=>$menuLink
        ]);
        return json_encode(['status'=>1, 'menuInfo'=>$menuInfo]);
    }

    public function menu_view(Request $request){
        $menuId = $request->menuId;
        $menuInfo = Menu::find($menuId);
        return json_encode(['menuInfo'=>$menuInfo]);
    }

    public function menu_edit(Request $request){
        $menuId = $request->menuId;
        $menuInfo = Menu::find($menuId);
        
        if ($menuInfo->id) {
            $menuInfo->name = $request->menuName;
            $menuInfo->link = $request->menuLink;
            $menuInfo->save();
            return json_encode(['status'=>1, 'menuInfo'=>$menuInfo]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function menu_delete(Request $request){
        $menuId = $request->menuId;
        $menuInfo = Menu::find($menuId);
        if ($menuInfo->id) {
            $menuInfo->delete();
            return json_encode(['status'=>1]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    // review management

    public function review_store(Request $request){
        $reviewContent = $request->reviewContent;

        $reviewInfo = Review::create([
            'content'=>$reviewContent, 
        ]);
        return json_encode(['status'=>1, 'reviewInfo'=>$reviewInfo]);
    }

    public function review_view(Request $request){
        $reviewId = $request->reviewId;
        $reviewInfo = Review::find($reviewId);
        return json_encode(['reviewInfo'=>$reviewInfo]);
    }

    public function review_edit(Request $request){
        $reviewId = $request->reviewId;
        $reviewInfo = Review::find($reviewId);
        
        if ($reviewInfo->id) {
            $reviewInfo->content = $request->reviewContent;
            $reviewInfo->save();
            return json_encode(['status'=>1, 'reviewInfo'=>$reviewInfo]);
        }else{
            return json_encode(['status'=>0]);
        }
    }

    public function review_delete(Request $request){
        $reviewId = $request->reviewId;
        $reviewInfo = Review::find($reviewId);
        if ($reviewInfo->id) {
            $reviewInfo->delete();
            return json_encode(['status'=>1]);
        }else{
            return json_encode(['status'=>0]);
        }
    }
}