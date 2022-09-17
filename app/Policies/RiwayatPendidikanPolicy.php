<?php

namespace App\Policies;

use App\Models\Commons\User;
use App\Models\Kepegawaian\RiwayatPendidikan;
use Illuminate\Auth\Access\HandlesAuthorization;

class RiwayatPendidikanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Commons\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Commons\User  $user
     * @param  \App\Models\Kepegawaian\RiwayatPendidikan  $riwayatPendidikan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, RiwayatPendidikan $riwayatPendidikan)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Commons\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Commons\User  $user
     * @param  \App\Models\Kepegawaian\RiwayatPendidikan  $riwayatPendidikan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, RiwayatPendidikan $riwayatPendidikan)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Commons\User  $user
     * @param  \App\Models\Kepegawaian\RiwayatPendidikan  $riwayatPendidikan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, RiwayatPendidikan $riwayatPendidikan)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Commons\User  $user
     * @param  \App\Models\Kepegawaian\RiwayatPendidikan  $riwayatPendidikan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, RiwayatPendidikan $riwayatPendidikan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Commons\User  $user
     * @param  \App\Models\Kepegawaian\RiwayatPendidikan  $riwayatPendidikan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, RiwayatPendidikan $riwayatPendidikan)
    {
        //
    }
}
