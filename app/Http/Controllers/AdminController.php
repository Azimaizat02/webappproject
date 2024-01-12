<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Player;
use App\Models\Donation;
use App\Models\News;
use App\Models\Merchandise;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    //Player
    public function player_page()
    {
        return view('admin.player_page');
    }

    public function add_player(Request $request)
    {

        $user=Auth()->user();

        $userid = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;

        $player=new Player;

        $player->title = $request->title;

        $player->description = $request->description;

        $player->player_status = 'active';

        $player->user_id = $userid;

        $player->name = $name;

        $player->usertype = $usertype;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('playerimage',$imagename);

        $player->image = $imagename;

        }


        $player->save();

        return redirect()->back()->with('message','Post Added Successfully');

    }
    public function show_player()
    {
        $player = Player::all();
        return view('admin.show_player',compact('player'));
    }
    public function delete_player($id)
    {
        $player = Player::find($id);

        $player->delete();
        return redirect()->back()->with('message','Player Deleted Successfully');

    }
    public function edit_player($id)
    {
        $player = Player::find($id);
        return view('admin.edit_player',compact('player'));
    }
    public function update_player(Request $request,$id)
    {
        $data = Player::find($id);
        $data->title=$request->title;
        $data->description=$request->description;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('playerimage',$imagename);

        $data->image = $imagename;
        }
        $data->save();

        return redirect()->back()->with('message','Player Updated Successfully');
    }


//Donation

    public function add_donation_page()
    {
        return view('admin.add_donation_page');
    }
    public function add_donation(Request $request)
    {

        $user=Auth()->user();

        $userid = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;

        $donation=new Donation;

        $donation->title = $request->title;

        $donation->amount = $request->amount;

        $donation->donation_status = 'active';

        $donation->user_id = $userid;

        $donation->name = $name;

        $donation->usertype = $usertype;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('donationimage',$imagename);

        $donation->image = $imagename;

        }


        $donation->save();

        return redirect()->back()->with('message','Donation Added Successfully');

    }
    public function show_donation()
    {
        $donation = Donation::all();
        return view('admin.show_donation',compact('donation'));
    }
    public function delete_donation($id)
    {
        $donation = Donation::find($id);

        $donation->delete();
        return redirect()->back()->with('message','Donation Deleted Successfully');

    }
    public function edit_donation($id)
    {
        $donation = Donation::find($id);
        return view('admin.edit_donation',compact('donation'));
    }
    public function update_donation(Request $request,$id)
    {
        $data = Donation::find($id);
        $data->title=$request->title;
        $data->amount=$request->amount;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('donationimage',$imagename);

        $data->image = $imagename;
        }
        $data->save();

        return redirect()->back()->with('message','Donation Updated Successfully');
    }

//News

    public function add_news_page()
    {
        return view('admin.add_news_page');
    }
    public function add_news(Request $request)
    {

        $user=Auth()->user();

        $userid = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;

        $news=new News;

        $news->title = $request->title;

        $news->info = $request->info;

        $news->news_status = 'active';

        $news->user_id = $userid;

        $news->name = $name;

        $news->usertype = $usertype;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('newsimage',$imagename);

        $news->image = $imagename;

        }


        $news->save();

        return redirect()->back()->with('message','News Added Successfully');

    }
    public function show_news()
    {
        $news = News::all();
        return view('admin.show_news',compact('news'));
    }
    public function delete_news($id)
    {
        $news = News::find($id);

        $news->delete();
        return redirect()->back()->with('message','News Deleted Successfully');

    }
    public function edit_news($id)
    {
        $news = News::find($id);
        return view('admin.edit_news',compact('news'));
    }
    public function update_news(Request $request,$id)
    {
        $data = News::find($id);
        $data->title=$request->title;
        $data->info=$request->info;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('newsimage',$imagename);

        $data->image = $imagename;
        }
        $data->save();

        return redirect()->back()->with('message','News Updated Successfully');
    }

//Merchandise
public function merchandise_page()
{
    return view('admin.merchandise_page');
}
public function add_merchandise(Request $request)
{

    $user=Auth()->user();

    $userid = $user->id;

    $name = $user->name;

    $usertype = $user->usertype;

    $merchandise = new Merchandise;

    $merchandise->title = $request->title;

    $merchandise->details = $request->details;

    $merchandise->ringgit = $request->ringgit;

    $merchandise->merchandise_status = 'active';

    $merchandise->user_id = $userid;

    $merchandise->name = $name;

    $merchandise->usertype = $usertype;

    $image=$request->image;

    if($image)
    {
        $imagename=time().'.'.$image->getClientOriginalExtension();

    $request->image->move('merchandiseimage',$imagename);

    $merchandise->image = $imagename;

    }


    $merchandise->save();

    return redirect()->back()->with('message','Merchandise Added Successfully');

}
public function show_merchandise()
{
    $merchandise = Merchandise::all();
    return view('admin.show_merchandise',compact('merchandise'));
}
public function delete_merchandise($id)
{
    $merchandise = Merchandise::find($id);

    $merchandise->delete();
    return redirect()->back()->with('message','Merchandise Deleted Successfully');

}
public function edit_merchandise($id)
{
    $merchandise = Merchandise::find($id);
    return view('admin.edit_merchandise',compact('merchandise'));
}
public function update_merchandise(Request $request,$id)
{
    $data = Merchandise::find($id);
    $data->title=$request->title;
    $data->details=$request->details;
    $data->ringgit = $request->ringgit;

    $image=$request->image;

    if($image)
    {
        $imagename=time().'.'.$image->getClientOriginalExtension();

    $request->image->move('merchandiseimage',$imagename);

    $data->image = $imagename;
    }
    $data->save();

    return redirect()->back()->with('message','Merchandise Updated Successfully');
}


//Match/Game
public function game_page()
{
    return view('admin.game_page');
}
public function add_game(Request $request)
{

    $user=Auth()->user();

    $userid = $user->id;

    $name = $user->name;

    $usertype = $user->usertype;

    $game = new Game;

    $game->title = $request->title;

    $game->game = $request->game;

    $game->total = $request->total;

    $game->game_status = 'active';

    $game->user_id = $userid;

    $game->name = $name;

    $game->usertype = $usertype;

    $image=$request->image;

    if($image)
    {
        $imagename=time().'.'.$image->getClientOriginalExtension();

    $request->image->move('gameimage',$imagename);

    $game->image = $imagename;

    }


    $game->save();

    return redirect()->back()->with('message','Match Added Successfully');

}
public function show_game()
{
    $game = Game::all();
    return view('admin.show_game',compact('game'));
}
public function delete_game($id)
{
    $game = Game::find($id);

    $game->delete();
    return redirect()->back()->with('message','Match Deleted Successfully');

}
public function edit_game($id)
{
    $game = Game::find($id);
    return view('admin.edit_game',compact('game'));
}
public function update_game(Request $request,$id)
{
    $data = Game::find($id);
    $data->title=$request->title;
    $data->game=$request->game;
    $data->total = $request->total;

    $image=$request->image;

    if($image)
    {
        $imagename=time().'.'.$image->getClientOriginalExtension();

    $request->image->move('gameimage',$imagename);

    $data->image = $imagename;
    }
    $data->save();

    return redirect()->back()->with('message','Match Updated Successfully');
}
}
