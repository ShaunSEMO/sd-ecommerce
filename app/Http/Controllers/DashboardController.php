<?php

namespace App\Http\Controllers;

use App\Abouts;
use App\User;
use App\Value;
use App\Stats;
use App\TeamMember;
use App\Contact;
use App\Social_link;
use App\Item;
use App\Category;
use DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        $users = User::all();
        $team_members = TeamMember::all();

        return view('dashboard.index', compact(['users', 'team_members']));
    }

    
    /*--------
    About CRUD 
    --------*/

    public function about(){
        $about_info = Abouts::get();
        $values = Value::get();
        $stats = Stats::get();

        return view('dashboard.about', compact(['about_info', 'values', 'stats']));
    }

    public function updateAbout(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'desc' => 'required',
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/aboutimages', $filenameWithExt);
        } else {
            $fileNameToStore = 'No image here.';
        }

        $about = Abouts::find($id);
        $about->image = 'storage/img/aboutimages/'.$request->file('image')->getClientOriginalName();
        $about->desc = $request->input('desc');
        $about->save();

        return redirect('/$d_3c0mm3rc3/about');
    }

    public function updateValue(Request $request ,$id) {
        $value = Value::find($id);
        $value->value = $request->input('value');
        $value->desc = $request->input('desc');
        $value->save();

        return redirect('/$d_3c0mm3rc3/about');
    }

    public function updateStat(Request $request ,$id) {
        $stat = Stats::find($id);
        $stat->stat_num = $request->input('stat_num');
        $stat->title = $request->input('title');
        $stat->save();

        return redirect('/$d_3c0mm3rc3/about');
    }

    /*--------
    Team CRUD 
    --------*/

    public function team() {
        $members = TeamMember::get();

        return view('dashboard.team', compact(['members']));
    }

    public function addMember() {
        return view('dashboard.team.addMember');
    }

    public function saveMember(Request $request) {
        $member = new TeamMember;

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/members', $filenameWithExt);

            $member->image = 'storage/members/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $member->name = $request->input('name');
        $member->position = $request->input('position');
        $member->email = $request->input('email');
        $member->desc = $request->input('desc');
        $member->save();

        return redirect('/$d_3c0mm3rc3/team');
    }


    public function editMember($id) {
        $member = TeamMember::find($id);

        return view('dashboard.team.editMember', compact(['member']));
    }

    public function updateMember(Request $request, $id){
        $member = TeamMember::find($id);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/members', $filenameWithExt);

            $member->image = 'storage/members/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $member->name = $request->input('name');
        $member->position = $request->input('position');
        $member->email = $request->input('email');
        $member->desc = $request->input('desc');
        $member->save();

        return redirect('/$d_3c0mm3rc3/team');
    }

    public function deleteMember($id) {
        $member = TeamMember::find($id);
        $member->delete();
        return redirect('/$d_3c0mm3rc3/team');
    }

    
    /*--------
    Contact CRUD 
    --------*/
    public function contacts() {
        $contacts = Contact::get();
        $social_links = Social_link::get();

        return view('dashboard.contact', compact(['contacts', 'social_links']));
    }

    public function addContact() {
        return view('dashboard.contact.addContact');
    }

    public function saveContact(Request $request) {
        $contact = new Contact;
        $contact->number = $request->input('phone_number');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->save();

        return redirect('/$d_3c0mm3rc3/contacts');
    }

    public function editContact($id) {
        $contact = Contact::find($id);
        return view('dashboard.contact.editContact', compact(['contact']));
    }

    public function updateContact(Request $request, $id) {
        $contact = Contact::find($id);
        $contact->number = $request->input('phone_number');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->save();

        return redirect('/$d_3c0mm3rc3/contacts');
    }

    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/$d_3c0mm3rc3/contacts');
    }

    public function addSocialLink() {
        return view('dashboard.contact.addSocialLink');
    }

    public function saveSocialLink(Request $request) {
        $social_link = new Social_link;
        $social_link->platform = $request->input('platform');
        $social_link->link = $request->input('link');
        $social_link->save();

        return redirect('/$d_3c0mm3rc3/contacts');
    }

    public function editSocialLink($id) {
        $social_link = Social_link::find($id);
        return view('dashboard.contact.editSocialLink', compact(['social_link']));
    }

    public function updateSocialLink(Request $request, $id) {
        $social_link = social_link::find($id);
        $social_link->platform = $request->input('platform');
        $social_link->link = $request->input('link');
        $social_link->save();

        return redirect('/$d_3c0mm3rc3/contacts');
    }

    public function deleteSocialLink($id){
        $social_link = Social_link::find($id);
        $social_link->delete();
        return redirect('/$d_3c0mm3rc3/contacts');
    }

    /*--------
    Shop CRUD 
    --------*/
    public function shop() {
        $categories = Category::get();

        return view('dashboard.shop', compact(['categories']));
    }

    public function addCategory() {
        return view('dashboard.shop.addCategory');
    }

    public function saveCategory(Request $request) {
        $category = new Category;
        $category->icon = $request->input('icon');
        $category->title = $request->input('title');
        $category->save();

        return redirect('/$d_3c0mm3rc3/shop');

    }

    public function addItem() {
        $categories = Category::get();

        return view('dashboard.shop.addItem', compact(['categories']));
    }

    public function saveItem(Request $request) {
        $item = new Item;

        $input_category = $request->input('category');
        $category = DB::table('categories')->where('title', $input_category)->get()->first();
        $item->category_id = $category->id;
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->desc = $request->input('desc');
        $item->color = $request->input('color');
        $item->tag = $request->input('tag');
        $item->save();

        return redirect('/$d_3c0mm3rc3/shop');
    }
}
