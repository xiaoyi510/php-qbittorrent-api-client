<?php

namespace FatkulNurK\PHPQbittorrentApi;

use Fatkulnurk\PHPQbittorrentApi\Authentication\AuthenticationInterface;
use Fatkulnurk\PHPQbittorrentApi\Rss\RSSInterface;
use Fatkulnurk\PHPQbittorrentApi\Search\SearchInterface;
use Fatkulnurk\PHPQbittorrentApi\TorrentManagement\TorrentManagementInterface;
use Fatkulnurk\PHPQbittorrentApi\Application\ApplicationInterface;
use Fatkulnurk\PHPQbittorrentApi\Log\LogInterface;
use Fatkulnurk\PHPQbittorrentApi\Sync\SyncInterface;
use Fatkulnurk\PHPQbittorrentApi\TransferInfo\TransferInfoInterface;

/**
 * Interface QbittorrentInterface
 * @package FatkulNurK\PHPQbittorrentApi
 */
interface QbittorrentInterface
{
    /**
     * @return AuthenticationInterface
     */
    public function authentication(): AuthenticationInterface;

    /**
     * @return ApplicationInterface
     */
    public function application(): ApplicationInterface;

    /**
     * @return LogInterface
     */
    public function log(): LogInterface;

    /**
     * @return SyncInterface
     */
    public function sync(): SyncInterface;

    /**
     * @return TransferInfoInterface
     */
    public function transferInfo(): TransferInfoInterface;

    /**
     * @return TorrentManagementInterface
     */
    public function torrentManagement(): TorrentManagementInterface;

    /**
     * @return RSSInterface
     */
    public function rss(): RSSInterface;

    /**
     * @return SearchInterface
     */
    public function search(): SearchInterface;
}
