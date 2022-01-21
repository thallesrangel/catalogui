<?php

namespace App\Services;

use App\Http\Requests\AnnouncementRequest;
use App\Repositories\Contracts\AnnouncementRepositoryInterface;
use InvalidArgumentException;

class AnnouncementService
{
    protected $announcementRepository;

    public function __construct(AnnouncementRepositoryInterface $announcementRepository)
    {
        $this->announcementRepository = $announcementRepository;
    }

    public function get($request)
    {
        $status = match($request->status) {
            'aguardando' => 'waiting',
            'inativado' => 'inactivated',
            'expirado' => 'expired',
            default => 'published'
        };

        return $this->announcementRepository->get($status);
    }

    public function store(AnnouncementRequest $data)
    {
        $response = $this->announcementRepository->store($data);

        return $response;
    }

    public function show($slug)
    {
        return $this->announcementRepository->show($slug);
    }

    public function disable($id)
    {
        try{
            $this->announcementRepository->disable($id);
        } catch(\Exception $e) {
            throw new InvalidArgumentException('Não foi possível deletar o registro');
        }
        
        return redirect()->route('dashboard')->with("success", "Registro excluído com sucesso");
    }
}