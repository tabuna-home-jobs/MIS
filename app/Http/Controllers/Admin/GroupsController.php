<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Sentry;
use Session;

class GroupsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Groups = Group::paginate(15);

        return view('dashboard/user/groups', ['Groups' => $Groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard/user/addGroups');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(GroupRequest $request)
    {

            $group = Sentry::createGroup(array(
                'name' => $request->name,
                'permissions' => $request->permissions
            ));
            Session::flash('good', 'Вы создали удалили группу.');
            return redirect()->route('dashboard.groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $group = Sentry::findGroupById($id);

        return view('dashboard/user/groupsEdit', ['group' => $group]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update(GroupRequest $request)
    {

        $group = Sentry::findGroupById($request->id);

            // Update the group details
            $raznica = array_diff_key($group->permissions, $request->permissions);
            foreach ($raznica as $key => $value)
                $raznica[$key] = 0;

            $group->name = $request->namenew;
            $group->permissions = array_merge($raznica, $request->permissions);

            // Update the group
            if ($group->save()) {
                Session::flash('good', 'Вы изменили группу.');
                return redirect()->route('dashboard.groups.index');
            } else {
                // Group information was not updated
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy(GroupRequest $request)
    {
            Sentry::findGroupById($request->id)->delete();
            Session::flash('good', 'Вы успешно удалили группу.');
            return redirect()->route('dashboard.groups.index');

    }

}
