<?php

namespace Fatkulnurk\PHPQbittorrentApi;

use Fatkulnurk\PHPQbittorrentApi\{Authentication\Authentication,
    Authentication\AuthenticationInterface,
    Application\Application,
    Application\ApplicationInterface,
    Log\Log,
    Log\LogInterface,
    Rss\RSS,
    Rss\RSSInterface,
    Search\SearchInterface,
    Sync\Sync,
    Sync\SyncInterface,
    TorrentManagement\TorrentManagementInterface,
    TransferInfo\TransferInfo,
    TransferInfo\TransferInfoInterface};

class Qbittorrent implements QbittorrentInterface
{
    public function authentication(): AuthenticationInterface
    {
        return (new Authentication());
    }

    public function application(): ApplicationInterface
    {
        return (new Application());
    }

    public function log(): LogInterface
    {
        return (new Log());
    }

    public function sync(): SyncInterface
    {
        return (new Sync());
    }

    public function transferInfo(): TransferInfoInterface
    {
        return (new TransferInfo());
    }

    public function torrentManagement(): TorrentManagementInterface
    {
        // TODO: Implement torrentManagement() method.
    }

    public function rss(): RSSInterface
    {
        return (new RSS());
    }

    public function search(): SearchInterface
    {
        // TODO: Implement search() method.
    }
}
