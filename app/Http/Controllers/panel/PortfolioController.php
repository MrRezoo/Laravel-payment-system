<?php

namespace App\Http\Controllers\panel;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {

        $portfolios = Portfolio::orderBy('id', 'DESC')->paginate(10);
        return view('panel.portfolios.portfolios', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('panel.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $request->validate([
            'name' => 'required',
            'image'=>'required',
        ]);

        $portfolio = new Portfolio();
        try {
            $portfolio->create($request->all());
        } catch (Exception $exception) {

            return redirect(route('admin.portfolios.create'))->with('warning', $exception->getCode());
        }

        $msg = "ذخیره ی تصویر با موفقیت انجام شد";
        return redirect(route('admin.portfolios'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('panel.portfolios.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {


         $request->validate([
            'name' => 'required',
        ]);

        try {
            $portfolio->update($request->all());
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case 23000:
                    $msg = "نام مستعار وارد شده تکراری است";
                    break;
            }
            return redirect(route('admin.portfolios.edit'))->with('warning', $msg);
        }

        $msg = "ذخیره ی تصویر جدید با موفقیت انجام شد";
        return redirect(route('admin.portfolios'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        try {
            $portfolio->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.portfolios'))->with('warning', $exception->getCode());
        }

        $msg = "آیتم مورد نظر حذف گردید";
        return redirect(route('admin.portfolios'))->with('success', $msg);
    }

    public function updatestatus(Portfolio $portfolio)
    {
        if ($portfolio->status == 1) {
            $portfolio->status = 0;
        } else {
            $portfolio->status = 1;
        }

        $portfolio->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('admin.portfolios'))->with('success', $msg);

    }

}
