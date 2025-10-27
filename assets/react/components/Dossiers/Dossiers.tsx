import { useEffect, useMemo, useState } from "react";

import {
  CallToActionLink,
  Checkbox,
  Column,
  Field,
  FieldSet,
  Grid,
  Heading,
  Label,
  Pagination,
  Paragraph,
  Radio,
  Row,
  SearchField,
  Select,
  StandaloneLink,
  Table,
} from "@amsterdam/design-system-react";
import { TrashBinIcon } from "@amsterdam/design-system-react-icons";
import { throttle } from "lodash";

import { DossiersInterface } from "../../types/dossier.types";
import { MedewerkerInterface } from "~/types/medewerker.types";
import { PaginationInterface } from "~/types/pagination.types";
import { TeamInterface } from "~/types/team.types";

const SUBSET_SHV = ["bezig_shv", "compleet_shv", "gecontroleerd_shv", "verzonden_shv"];
const SUBSET_GKA = ["verzonden_shv", "compleet_gka", "dossier_gecontroleerd_gka"];
const SUBSET_ARCHIVED = ["afgesloten_gka"];

const ALL_STATUSES = [
  { label: "Bezig SHV", value: "bezig_shv" },
  { label: "Compleet SHV", value: "compleet_shv" },
  { label: "Gecontroleerd SHV", value: "gecontroleerd_shv" },
  { label: "Verzonden", value: "verzonden_shv" },
  { label: "Compleet GKA", value: "compleet_gka" },
  { label: "Gecontroleerd GKA", value: "dossier_gecontroleerd_gka" },
  { label: "Afgesloten", value: "afgesloten_gka" },
];

const THROTTLED_REQUEST_DELAY = 1000;

const PAGE_SIZES = [10, 25, 50];

export default function Dossiers({
  dossiers,
  gkaTeams,
  medewerkers,
  pagination
}: Readonly<{
  dossiers: DossiersInterface[];
  gkaTeams: TeamInterface[],
  medewerkers: MedewerkerInterface[],
  pagination: PaginationInterface;
}>) {
  const searchParams = new URLSearchParams(document.location.search);

  const updateUrlSearchParams = () => {
    document.location.search = searchParams.toString();
  };

  const resetToPage1 = () => {
    searchParams.delete("page");
  }

  const throttledRequestHandler = useMemo(() => throttle(updateUrlSearchParams, THROTTLED_REQUEST_DELAY, { trailing: true }), []);

  useEffect(() => () => throttledRequestHandler.cancel(), []);

  /*
  ** Setting current page and size of pages.
  */

  const currentPage: number = Number(searchParams.get("page")) || 1;
  const currentPageSize: number = Number(searchParams.get("pageSize")) || 10;

  const pickPageSize = (size: PaginationInterface["pageSize"]) => {
    if (size === 10) {
      searchParams.delete("pageSize");
    } else {
      searchParams.set("pageSize", size.toString());
    }

    resetToPage1();
    updateUrlSearchParams();
  };


  /*
  ** Setting search filter.
  */

  const [search, setSearch] = useState<string>(searchParams.get("search") || "");

  const searchHandler = (event: any) => {
    event.preventDefault();

    const form = event.currentTarget;
    const value = (form.elements.namedItem('search') as HTMLInputElement).value;

    throttledRequestHandler.cancel();

    setSearch(value);

    if (value) {
      searchParams.set("search", value.toLowerCase());
    } else {
      searchParams.delete("search");
    }

    resetToPage1();
    updateUrlSearchParams();
  };

  /*
  ** Setting section and status filter.
  */

  const [phase, setPhase] = useState<string>("all");

  const statusFilter: string[] = searchParams.get("statusFilter")?.split(",") || [];

  const selectPhase = (phase: string) => {
    setPhase(phase);

    switch (phase) {
      case "archive":
        searchParams.set("statusFilter", SUBSET_ARCHIVED.join(","));
        break;
      case "gka":
        searchParams.set("statusFilter", SUBSET_GKA.join(","));
        break;
      case "shv":
        searchParams.set("statusFilter", SUBSET_SHV.join(","));
        break;
      default:
        searchParams.delete("statusFilter");
    }

    resetToPage1();
    updateUrlSearchParams();
  };

  const toggleStatus = (status: string) => {
    setPhase("all");

    const newStatus = statusFilter.includes(status)
      ? statusFilter.filter((s: string) => s !== status)
      : [...statusFilter, status];

    if (newStatus.length > 0) {
      searchParams.set("statusFilter", newStatus.join(","));
    } else {
      searchParams.delete("statusFilter");
    }

    resetToPage1();
    updateUrlSearchParams();
  };

  useEffect(() => {
    const subsets = [
      { id: "archive", stringifiedItems: SUBSET_ARCHIVED.join(",") },
      { id: "gka", stringifiedItems: SUBSET_GKA.join(",") },
      { id: "shv", stringifiedItems: SUBSET_SHV.join(",") },
    ];

    for (const subset of subsets) {
      if (subset.stringifiedItems === statusFilter.join(",")) {
        setPhase(subset.id);
      }
    }
  }, []);

  /*
  ** Setting medewerker filter.
  */

  const [medewerker, setMedewerker] = useState<string>(searchParams.get("medewerkerId") || "all");
  const selectMedewerker = (value: string) => {
    setMedewerker(value);

    if (value === "all") {
      searchParams.delete("medewerkerId");
    } else {
      searchParams.set("medewerkerId", value);
    }

    resetToPage1();
    updateUrlSearchParams();
  };

  /*
  ** Setting team filter.
  */

  const [team, setTeam] = useState<string>(searchParams.get("teamId") || "all");
  const selectTeam = (value: string) => {
    setTeam(value);

    if (value === "all") {
      searchParams.delete("teamId");
    } else {
      searchParams.set("teamId", value);
    }

    resetToPage1();
    updateUrlSearchParams();
  };

  /*
  ** Setting page filter.
  */

  const linkTemplate = useMemo(() => {
    return (pageNumber: number) => {
      const updatedSearchParams = new URLSearchParams(searchParams.toString());

      if (pageNumber === 1) {
        updatedSearchParams.delete("page");
      } else {
        updatedSearchParams.set("page", pageNumber.toString());
      }

      const queryString = updatedSearchParams.toString();
      return queryString ? `?${queryString}` : "";
    };
  }, [searchParams.toString()]);

  return (
    <>
      <Grid.Cell span="all">
        <Row align="between" wrap={true}>
          <Heading level={1}>Dossiers</Heading>

          <Row alignVertical="center">
            <StandaloneLink href="/dossiers/prullenbak" icon={TrashBinIcon}>Prullenbak</StandaloneLink>
            <CallToActionLink href="/dossier/nieuw">Nieuw dossier</CallToActionLink>
          </Row>
        </Row>
      </Grid.Cell>

      <Grid.Cell span={{ narrow: 4, medium: 8, wide: 9 }}>
        <Column>
          <SearchField onSubmit={searchHandler}>
            <Column gap="small">
              <Label htmlFor="dossiers-zoeken">Dossiers zoeken</Label>

              <Row gap="none">
                <SearchField.Input
                  id="dossiers-zoeken"
                  name="search"
                  onChange={e => setSearch(e.target.value)}
                  placeholder="Zoek op naam of dossier nr."
                  size={50}
                  value={search}
                />
                <SearchField.Button type="submit" />
              </Row>
            </Column>
          </SearchField>

          {
            (dossiers?.length > 0)
              ? (
                <Table>
                  <Table.Header>
                    <Table.Row>
                      <Table.HeaderCell title="Naam van de cliënt">Naam</Table.HeaderCell>
                      <Table.HeaderCell title="Behandelende organisatie">Organisatie</Table.HeaderCell>
                      <Table.HeaderCell title="Dossiernummer van schuldhulpverlener of bewindvoerder (samen: “Regas”)">Regas-nr.</Table.HeaderCell>
                      <Table.HeaderCell title="Dossiernummer van de Gemeentelijke Kredietbank Amsterdam (GKA) in de Allegro Basis-applicatie">Allegro-nr.</Table.HeaderCell>
                      <Table.HeaderCell title="Datum waarop het dossier is aangemaakt">Aangemaakt</Table.HeaderCell>
                      <Table.HeaderCell title="Huidige status van het dossier">Status</Table.HeaderCell>
                    </Table.Row>
                  </Table.Header>

                  <Table.Body>
                    {dossiers.map((dossier: DossiersInterface) => {
                      return (
                        <Table.Row key={dossier.id}>
                          <Table.Cell style={{ minWidth: 90, maxWidth: 180 }} width="26%">{`${dossier.clientVoorletters}. ${dossier.clientNaam}`}</Table.Cell>
                          <Table.Cell style={{ width: "100%" }} width="25%">{dossier.organisatie}</Table.Cell>
                          <Table.Cell width="8%">{dossier.regasNummer}</Table.Cell>
                          <Table.Cell width="8%">{dossier.allegroNummer}</Table.Cell>
                          <Table.Cell title={dossier.aanmaakDatumTijd} width="8%">{dossier.aanmaakDatumTijd.split(" ")[0].split("-").reverse().join("-")}</Table.Cell>
                          <Table.Cell style={{ minWidth: 140 }} width="25%">
                            {
                              ALL_STATUSES
                                .find(
                                  (status: { label: string, value: string }) =>
                                    status.value === dossier.status,
                                )
                                ?.label
                            }
                          </Table.Cell>
                        </Table.Row>
                      );
                    })}
                  </Table.Body>
                </Table>
              )
              : <Paragraph>Geen dossiers gevonden</Paragraph>
          }

          {pagination.numberOfPages > 1 && (
            <Pagination
              linkTemplate={linkTemplate}
              page={currentPage}
              totalPages={pagination.numberOfPages}
            />
          )}
        </Column>
      </Grid.Cell>

      <Grid.Cell span={{
        narrow: 4, medium: 8, wide: 3,
      }}
      >
        <Column>
          <Field>
            <Label htmlFor="dossiers-medewerker">Medewerker</Label>
            <Select
              id="dossiers-medewerker"
              value={medewerker}
              onChange={e => selectMedewerker(e.target.value)}
            >
              <Select.Option value="all">Alle medewerkers</Select.Option>
              {medewerkers.map((medewerker: { id: string, naam: string }) => {
                return (
                  <Select.Option key={medewerker.id} value={medewerker.id}>{medewerker.naam}</Select.Option>
                )
              })}
            </Select>
          </Field>

          <Field>
            <Label htmlFor="dossiers-team">Team</Label>
            <Select
              id="dossiers-team"
              value={team}
              onChange={e => selectTeam(e.target.value)}
            >
              <Select.Option value="all">Alle teams</Select.Option>
              {gkaTeams.map((team: { id: string, naam: string }) => {
                return (
                  <Select.Option key={team.id} value={team.id}>{team.naam}</Select.Option>
                )
              })}
            </Select>
          </Field>

          <Field>
            <Label htmlFor="dossiers-fase">Fase van dossier</Label>
            <Select
              aria-describedby="dossiers-fase-description"
              id="dossiers-fase"
              value={phase}
              onChange={e => selectPhase(e.target.value)}
            >
              <Select.Option value="all">Alle fases</Select.Option>
              <Select.Option value="shv">Dossiers bij SHV-er/Bewindvoerder</Select.Option>
              <Select.Option value="gka">Dossiers bij GKA</Select.Option>
              <Select.Option value="archive">Afgeronde dossiers</Select.Option>
            </Select>
          </Field>

          <FieldSet
            id="fieldset-status"
            aria-labelledby="fieldset-status"
            legend="Status"
          >
            <Column gap="x-small">
              {ALL_STATUSES.map((status: { label: string, value: string }) => (
                <Checkbox
                  key={status.label}
                  name="about"
                  aria-required="true"
                  checked={statusFilter.includes(status.value)}
                  value={status.value}
                  onChange={() => toggleStatus(status.value)}
                >
                  {status.label}
                </Checkbox>
              ))}
            </Column>
          </FieldSet>

          <FieldSet
            aria-required="true"
            legend="Resultaten per pagina"
            role="radiogroup"
          >
            <Column gap="x-small">
              {PAGE_SIZES.map((pageSize: PaginationInterface["pageSize"]) => {
                return (
                  <Radio
                    key={pageSize}
                    name="about"
                    aria-required="true"
                    checked={currentPageSize === pageSize}
                    value={pageSize}
                    onChange={() => pickPageSize(pageSize)}
                  >
                    {pageSize}
                  </Radio>
                );
              })}
            </Column>
          </FieldSet>
        </Column>
      </Grid.Cell>
    </>
  );
}
