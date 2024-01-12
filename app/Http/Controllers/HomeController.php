<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;
use App\Models\Donation;
use App\Models\News;
use App\Models\Merchandise;
use App\Models\Game;
use Alert;


class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $player=Player::all();
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage',compact('player'));
            }
            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $player = Player::all();
        return view ('home.homepage',compact('player'));
    }

    public function player_details($id)
    {
        $player = Player::find($id);
        return view ('home.player_details',compact('player'));
    }
    public function my_player()
    {
        $player = Player::all();
        return view ('home.my_player',compact('player'));
    }
    public function about_us()
    {
        return view ('home.about_us');
    }
    public function donation()
    {
        $donation = Donation::all();
        return view ('home.donation',compact('donation'));
    }
    public function create_donation()
    {
        return view ('home.create_donation');
    }
    public function user_donation(Request $request)
    {
        $user=Auth()->user();

        $userid = $user->id;

        $username = $user->name;

        $usertype = $user->usertype;

        $donation=new Donation;
        $donation = new Donation;
        $donation->title = $request->title;
        $donation->amount = $request->amount;

        $donation->user_id = $userid;

        $donation->name = $username;

        $donation->usertype = $usertype;

        $donation->donation_status = 'active';

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('donationimage',$imagename);

        $donation->image = $imagename;
        }
        $donation->save();

        Alert::success('Congrats','You have Added the data Successfully');
        // return view ('home.user_donation');
        return redirect()->back();
    }

    public function news()
    {
        $news = News::all();
        return view ('home.news',compact('news'));
    }
    public function merchandise()
    {
        $merchandise = Merchandise::all();
        return view ('home.merchandise',compact('merchandise'));
    }
    public function cartmerchandise($id)
    {
        $merchandise = Merchandise::find($id);
        return view ('home.cartmerchandise',['merchandise' => $merchandise]);
    }

    public function game()
    {
        $game = Game::all();
        return view ('home.game',compact('game'));
    }
    public function cartgame($id)
    {
        $game = Game::find($id);
        return view ('home.cartgame',['game' => $game]);
    }
}
